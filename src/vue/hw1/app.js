Vue.createApp({
    data() {
        return {

            title1: 'Заголовок к форме',
            title2: '(через выражение)',
            titleh2: 'Еще один вариант заголовка - через функцию',
            myHtml: '<b>Жирный текст </b><i>Курсив</i>',
            formdata: {
                text: 'Поле ввода',
                textarea: 'Textarea',
                checked: false,
                checked2: false,
                seen: true,
                errorStyle: 'border: 2px solid red',
                warningStyle: 'border: 2px solid green',
                style: 'border: 2px solid blue',
                color: 'blue',
            }
        }
    },
    methods: {
        showTitle () {
            return this.titleh2
        },
        showMessageType(event) {
            alert(event.type)
        },
        showTitleText (str, event) {
            return this.event = str
        },
        isChecked (event) {
            return this.formdata.checked ? 'Заблокировано' : 'Поле воода доступно'
        },
        seenFunction (event) {
            return this.formdata.seen = ! this.formdata.seen
        },
        onSubmit(event) {
            alert("Форма не будет отправлена!")
        },
        textDelete (event) {
            alert('Ай!')
        },
        changeStyle (event) {
                this.formdata.color = 'green'
                this.formdata.textarea = 'Поле не должно оставаться пустым'
                this.formdata.style = this.formdata.warningStyle
        }
    }
}).mount('#myApp')