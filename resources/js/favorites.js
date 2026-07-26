import { TOAST_EVENT } from './cart';

export const FAVORITES_STORAGE_KEY = 'ferro_favorites';
export const FAVORITES_TOGGLE_EVENT = 'ferro:toggle-favorite';
export const FAVORITES_UPDATED_EVENT = 'ferro:favorites-updated';

const legacyRentalPrices = {
    1: [{ label: 'Hora', value: 15000 }, { label: 'Día', value: 95000 }, { label: 'Semana', value: 450000 }],
    2: [{ label: 'Hora', value: 20000 }, { label: 'Día', value: 120000 }, { label: 'Semana', value: 550000 }],
    3: [{ label: 'Hora', value: 25000 }, { label: 'Día', value: 140000 }, { label: 'Semana', value: 650000 }],
    4: [{ label: 'Hora', value: 12000 }, { label: 'Día', value: 85000 }, { label: 'Semana', value: 380000 }],
    5: [{ label: 'Hora', value: 18000 }, { label: 'Día', value: 110000 }, { label: 'Semana', value: 500000 }],
    6: [{ label: 'Hora', value: 30000 }, { label: 'Día', value: 180000 }, { label: 'Semana', value: 850000 }],
};

const normalizeFavorite = (product) => ({
    key: String(product.key ?? `${product.type ?? 'product'}-${product.id}`),
    id: product.id,
    type: product.type ?? 'product',
    name: String(product.name ?? 'Producto FERRANOVA'),
    description: String(product.description ?? ''),
    brand: String(product.brand ?? 'FERRANOVA'),
    image: String(product.image ?? ''),
    price: Math.max(
        0,
        Number(product.price ?? product.unitPrice ?? product.prices?.[1]?.value) || 0,
    ),
    prices: (
        Array.isArray(product.prices) && product.prices.length
            ? product.prices
            : product.type === 'rental'
                ? legacyRentalPrices[product.id] ?? []
                : []
    ).map((price) => ({
            label: String(price.label ?? ''),
            value: Math.max(0, Number(price.value) || 0),
        })),
});

export function readFavorites() {
    try {
        const current = localStorage.getItem(FAVORITES_STORAGE_KEY);
        const legacy = localStorage.getItem('ferro_heart');
        const currentItems = JSON.parse(current ?? '[]');
        const legacyItems = JSON.parse(legacy ?? '[]');
        const merged = [...(Array.isArray(currentItems) ? currentItems : [])];

        if (Array.isArray(legacyItems)) {
            legacyItems.forEach((legacyItem) => {
                const normalizedLegacy = normalizeFavorite(legacyItem);
                if (!merged.some((item) =>
                    normalizeFavorite(item).key === normalizedLegacy.key
                )) {
                    merged.push(legacyItem);
                }
            });
        }

        const stored = merged.map(normalizeFavorite);

        if (legacy) {
            localStorage.setItem(FAVORITES_STORAGE_KEY, JSON.stringify(stored));
            localStorage.removeItem('ferro_heart');
        }

        return stored;
    } catch {
        return [];
    }
}

function publishFavorites(items) {
    const normalized = items.map(normalizeFavorite);
    localStorage.setItem(FAVORITES_STORAGE_KEY, JSON.stringify(normalized));
    window.dispatchEvent(new CustomEvent(FAVORITES_UPDATED_EVENT, {
        detail: { items: normalized },
    }));
    return normalized;
}

export function favoriteExists(key, items = readFavorites()) {
    return items.some((item) => item.key === String(key));
}

export function toggleFavorite(product) {
    const incoming = normalizeFavorite(product);
    const items = readFavorites();
    const exists = favoriteExists(incoming.key, items);
    const updatedItems = exists
        ? items.filter((item) => item.key !== incoming.key)
        : [...items, incoming];

    publishFavorites(updatedItems);
    window.dispatchEvent(new CustomEvent(TOAST_EVENT, {
        detail: {
            type: 'success',
            title: exists ? 'Eliminado de favoritos' : 'Guardado en favoritos',
            message: exists
                ? 'Se ha eliminado de favoritos.'
                : 'Se ha agregado a favoritos con éxito.',
        },
    }));

    return updatedItems;
}

export function removeFavorite(key) {
    const items = readFavorites();
    const removed = items.find((item) => item.key === String(key));
    const updatedItems = publishFavorites(
        items.filter((item) => item.key !== String(key)),
    );

    if (removed) {
        window.dispatchEvent(new CustomEvent(TOAST_EVENT, {
            detail: {
                type: 'success',
                title: 'Eliminado de favoritos',
                message: 'Se ha eliminado de favoritos.',
            },
        }));
    }

    return updatedItems;
}
