const state = {
    products: [
        { id: 1, name: 'Mouse', price: 10000 },
        { id: 2, name: 'WireMouse', price: 20000 },
        { id: 3, name: 'WirelessMouse', price: 30000 },
    ],
    product: null
}

const mutations = {
    Store(state, product) {
        state.products.push(product);
        this.$router.push({ name: 'List' });
        ` {name:aada} `
    },
    Delete(state, id) {
        var index = state.products.findIndex(e => e.id == id);
        state.products.splice(index, 1);
    },
    Show(state, id) {
        var index = state.products.findIndex(e => e.id == id);
        state.product = Object.assign({}, state.products[index]);

    }
}

const actions = {
    toStore({ commit }, product) {
        commit('Store', product);
    },
    toDelete({ commit }, id) {
        commit('Delete', id);
    },
    toShow({ commit }, id) {
        setTimeout(() => {
            commit('Show', id);
        }, 5000);

    }
}

const getters = {
    products(state) {
        return state.products;
    },
    product(state) {
        return state.product;
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}