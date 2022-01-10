/**
 * Swiper 7.3.3
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2021 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: December 17, 2021
 */

import Swiper from './core/core.js';
export { default as Swiper, default } from './core/core.js';
import Virtual from './modules/virtual/virtual.js';
import Keyboard from './modules/keyboard/keyboard.js';
import Mousewheel from './modules/mousewheel/mousewheel.js';
import Navigation from './modules/navigation/navigation.js';
import Pagination from './modules/pagination/pagination.js';
import HashNavigation from './modules/hash-navigation/hash-navigation.js';
import Autoplay from './modules/autoplay/autoplay.js';
import Thumbs from './modules/thumbs/thumbs.js';

// Swiper Class
const modules = [Virtual, Keyboard, Mousewheel, Navigation, Pagination, HashNavigation, Autoplay, Thumbs];
Swiper.use(modules);
