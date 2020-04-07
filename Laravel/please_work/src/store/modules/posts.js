import Axios from "axios"

const state = {
    posts: [],
}

const mutations = {
    showPost(state, data) {
        state.posts = data
    },
    createPost(state, data) {
        state.posts.push(data)
    },
    editPost(state, data) {
        var index = state.posts.findIndex(e => e.id == data.id)
        state.posts[index] = data;
    },
    deletePost(state, id) {
        var index = state.posts.findIndex(e => e.id == id)
        state.posts.splice(index, 1);
    }
}

const actions = {
    async showData({ commit }) {
        try {
            const res = await Axios.get('http://localhost:8000/api/newPosts');
            console.log(res.data)
            commit('showPost', res.data)
        } catch (err) {
            console.log(err)
        }
    },
    async createForm({ commit }, data) {
        try {
            const res = await Axios.post('http://localhost:8000/api/newPosts', data)
            console.log(res.data)
            commit('createPost', res.data)
        } catch (err) {
            console.log(err)
        }
    },
    async editForm({ commit }, data) {
        try {
            const res = await Axios.put('http://localhost:8000/api/newPosts/' + data.id, data)
            commit('editPost', res.data)
        } catch (err) {
            console.log(err)
        }
    },
    async deleteForm({ commit }, id) {
        try {
            await Axios.delete('http://localhost:8000/api/newPosts/' + id)
            commit('deletePost', id)
        } catch (err) {
            console.log(err)
        }
    }
}

const getters = {
    posts(state) {
        return state.posts
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}