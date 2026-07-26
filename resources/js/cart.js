export const CART_STORAGE_KEY = 'ferro_cart';
export const CART_UPDATED_EVENT = 'ferro:cart-updated';
export const CART_ADD_EVENT = 'ferro:add-to-cart';
export const TOAST_EVENT = 'ferro:toast';

const toPositiveInteger = (value, fallback = 1) => {
    const parsed = Number.parseInt(value, 10);
    return Number.isFinite(parsed) && parsed > 0 ? parsed : fallback;
};

const normalizeItem = (item) => ({
    key: String(item.key ?? `${item.type ?? 'product'}-${item.id}`),
    id: item.id,
    type: item.type ?? 'product',
    name: String(item.name ?? 'Producto FERRANOVA'),
    description: String(item.description ?? ''),
    brand: String(item.brand ?? 'FERRANOVA'),
    image: String(item.image ?? ''),
    price: Math.max(0, Number(item.price) || 0),
    qty: toPositiveInteger(item.qty),
});

export function readCart() {
    try {
        const stored = JSON.parse(localStorage.getItem(CART_STORAGE_KEY) || '[]');
        return Array.isArray(stored) ? stored.map(normalizeItem).filter((item) => item.price > 0) : [];
    } catch {
        return [];
    }
}

function publishCart(items) {
    const normalized = items.map(normalizeItem);
    localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(normalized));
    window.dispatchEvent(new CustomEvent(CART_UPDATED_EVENT, {
        detail: { items: normalized },
    }));
    return normalized;
}

export function addToCart(product, quantity = 1) {
    const incoming = normalizeItem({ ...product, qty: quantity });
    const items = readCart();
    const existing = items.find((item) => item.key === incoming.key);

    if (existing) {
        existing.qty += incoming.qty;
    } else {
        items.push(incoming);
    }

    const updatedItems = publishCart(items);
    window.dispatchEvent(new CustomEvent(TOAST_EVENT, {
        detail: {
            type: 'success',
            title: 'Producto agregado',
            message: `${incoming.name} se agregó al carrito.`,
        },
    }));

    return updatedItems;
}

export function updateCartQuantity(key, delta) {
    const items = readCart();
    const item = items.find((entry) => entry.key === String(key));
    if (!item) return items;

    item.qty = Math.max(1, item.qty + Number(delta || 0));
    return publishCart(items);
}

export function removeFromCart(key) {
    const items = readCart().filter((item) => item.key !== String(key));
    return publishCart(items);
}

export function clearCart() {
    return publishCart([]);
}

export function cartCount(items = readCart()) {
    return items.reduce((total, item) => total + item.qty, 0);
}

