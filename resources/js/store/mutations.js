let mutations = {
        CREATE_POST(state, post) {
            state.orders.unshift(post)
        },
        FETCH_POSTS(state, orders) {
            return state.orders = orders
        },
        DELETE_POST(state, post) {
            let index = state.orders.findIndex(item => item.id === post.id)
            state.orders.splice(index, 1)
        }

    }
    export default mutations