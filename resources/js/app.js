// import {bootstrap} from './bootstrap.js'
import Alpine from 'alpinejs'
import persons from './persons.js'
window.Alpine = Alpine

Alpine.data('persons', persons)

Alpine.start()
