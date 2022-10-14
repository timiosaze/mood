// import {bootstrap} from './bootstrap.js'
import Alpine from 'alpinejs'
import persons from './persons.js'
import states from './alpine/states.js'
window.Alpine = Alpine

Alpine.data('persons', persons)
Alpine.data('states', states)

Alpine.start()
