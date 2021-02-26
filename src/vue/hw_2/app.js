const MyApp = Vue.createApp({
    data() {
        return {
            titleFirst: 'Первый заголовок',
            titleSecond: 'Второй заголовок',
            title: 'Пример с v-show',
            show: true,
            cheked: true,
            firstLists: [],
            secondLists: [],
            count: 0,
            inputText: '',
            message: 'Количество введеных символов = ',
            output: ''
        }
    },
    methods: {
        delItem (i) {
            return this.firstLists.splice(i, 1)
        },
        getOutput () {
            this.output = this.message + this.inputText.length
        },
        gotoFocus() {
            this.$refs.textFocus.focus()
        }
    },
    computed: {
        sentence() {
            return this.firstLists.join(' ')
        },
        // countMenu () {
        //     for (let secondList in this.secondLists) {
        //         if (this.secondLists[secondList].status) {
        //             this.count++
        //         }
        //     }
        //     return this.count
        // },
    },
    watch: {
        inputText(newInputText, oldInputText) {
            if (newInputText.length !== oldInputText.length) {
                this.getOutput()
            }
        }
    },
    created () {
        this.firstLists = ['Каждый', 'охотник', 'желает', 'знать', 'где' , 'сидит' , 'фазан'],
        this.secondLists = [
            {
                title: 'Яичница',
                status: false
            },
            {
                title: 'Оладьи',
                status: false
            },
            {
                title: 'Овсянка',
                status: false
            },
            {
                title: 'Кофе',
                status: true
            },
            {
                title: 'Шампанское',
                status: false
            },
            {
                title: 'Что приползет',
                status: true
            }
        ]
    }
})

const myApp = MyApp.mount('#myApp')


const Check = Vue.createApp({
    data() {
        return {
            i: 1,
            heading: 'ДЗ №2'
        }
    },
    methods: {
        switching () {
            return myApp.cheked = ! myApp.cheked
        }
    },
    created() {
        this.heading = 'Заголовок определен на этапе created() '
    }
})

const check = Check.mount('#check')