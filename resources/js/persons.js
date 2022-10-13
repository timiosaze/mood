import axios from 'axios';

window.axios = axios;

export default () => ({
    init() {
        console.log('I am called automatically')
        this.getPersons()
    },
    open: false,
    data: [],
    headings: [
        {
            'key': 'id',
            'value': 'ID'
        },
        {
            'key': 'name',
            'value': 'Name'
        },
        {
            'key': 'age',
            'value': 'Age'
        },
        {
            'key': 'email',
            'value': 'Email'
        },
        {
            'key': 'address',
            'value': 'Address'
        },
        {
            'key': 'gender',
            'value': 'Gender'
        },
        {
            'key': 'salary',
            'value': 'Salary'
        }
    ],
    getPersons() {
        axios.get('http://127.0.0.1:8000/api/allpersons')
        .then(response => this.data = response.data.data)
        .catch(error =>  console.log(error));
    },
    toggle() {
        this.open = ! this.open
    },
    
})