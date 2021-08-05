export default {

    data: () => ({
        count: 0,
        joke: '',
    }),

    methods: {
        increment(val) {
            this.count += val
        },
        decrement(val) {
            this.count -= val
        },
        getJoke() {
            axios.get('https://api.chucknorris.io/jokes/random')
                .then(response => {
                    this.joke = response.data.value
                })
        },
    },

    renderTraditional(h, ctx) {
        return h('div', 'fooooo')
    },

    render() {
        return this.$scopedSlots.default({
            count: this.count,
            joke: this.joke,
            getJoke: this.getJoke,
            increment: this.increment,
            decrement: this.decrement,
        })
    }
}
