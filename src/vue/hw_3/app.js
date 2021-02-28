//локальная регистрация компонента
const ColorTextarea = {
    data() {
        return {
            formdata: {
                textarea: 'Textarea',
                errorStyle: 'border: 2px solid red',
                warningStyle: 'border: 2px solid green',
                style: 'border: 2px solid blue',
                color: 'blue',
            }
        }
    },
    template: `
        <div class="mb-3">
            <label for="input" class="form-label" :style="{'color': formdata.color}">{{ formdata.textarea }}</label>
            <textarea class="form-control" id="input" @input="changeStyle" :style="formdata.style"></textarea>
        </div>`,
    methods: {
        changeStyle(event) {
            this.formdata.color = 'green'
            this.formdata.textarea = 'Поле не должно оставаться пустым'
            this.formdata.style = this.formdata.warningStyle
        }
    }
 }

const BtnSubmit = {
    template: `
        <div  class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>`
}

const app = Vue.createApp({
    components: {
        'color-textarea': ColorTextarea,
        'btn-submit': BtnSubmit,
    },
    methods: {
        onSubmit(event) {
            alert("Форма не будет отправлена!")
        },
    }
})

//глобальная регистрация компонента
app.component('mytitle', {
    // data() {
    //     return {
    //         titleFirst: 'Первый заголовок',
    //         titleSecond: 'Второй заголовок',
    //         cheked: true,
    //     }
    // },
    data() {
        return {
            cheked: true,
        }
    },
    props: ['titleFirst', 'titleSecond'],
    template: `
        <input type="checkbox" @click="switching"> Переключить заголовок
        <h1 v-if="cheked">{{ titleFirst }}</h1>
        <h1 v-else>{{ titleSecond }}</h1>`,
    methods: {
        switching () {
            return this.cheked = ! this.cheked
        }
    }
})

app.mount('#app')