import axios from 'axios';

window.axios = axios;

export default () => ({
    init() {
        console.log('I am called automatically')
        this.getStates()
        setTimeout(() => {
            this.addValue()
          }, 500);
    },
    open: false,
    data: [],
    getStates() {
        axios.get('http://127.0.0.1:8000/api/allstates')
        .then(response => this.data = response.data.data)
        .catch(error =>  console.log(error));
        
    },
    removeAttr(){
        this.$el.lastElementChild.removeAttribute("disabled")
        this.$el.firstElementChild.removeAttribute("disabled")
    },
    addValue() {
       this.data.forEach((x) => x.value = 50)
    },
    toggle() {
        this.open = ! this.open
    },
    
})