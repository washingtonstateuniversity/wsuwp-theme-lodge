/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/src/index.js":
/*!*****************************!*\
  !*** ./assets/src/index.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/main.scss */ "./assets/src/scss/main.scss");
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_main_scss__WEBPACK_IMPORTED_MODULE_0__);




/***/ }),

/***/ "./assets/src/scss/main.scss":
/*!***********************************!*\
  !*** ./assets/src/scss/main.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Non-integer values are not supported in modularscale by default. Try using mathsass in your project to add non-integer scale support. https://github.com/terkel/mathsass\n        on line 21 of node_modules/modularscale-sass/stylesheets/modularscale/_pow.scss, in function `ms-pow`\n        from line 15 of node_modules/modularscale-sass/stylesheets/modularscale/_function.scss, in function `ms-function`\n        from line 6 of node_modules/modularscale-sass/stylesheets/modularscale/_sugar.scss, in function `ms`\n        from line 99 of assets/src/scss/base/_mixins.scss, in mixin `type-size`\n        from line 10 of assets/src/scss/base/_typography.scss\n        from line 13 of /Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/assets/src/scss/main.scss\n>>     @error 'Non-integer values are not supported in modularscale by default.\n   ----^\n\n    at runLoaders (/Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/webpack/lib/NormalModule.js:313:20)\n    at /Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.render [as callback] (/Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/sass-loader/dist/index.js:73:7)\n    at Object.done [as callback] (/Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/neo-async/async.js:8067:18)\n    at options.error (/Users/nicdford/vagrant-local/www/wsuwp-lodge/public_html/wp-content/themes/wsuwp-theme-lodge/node_modules/node-sass/lib/index.js:294:32)");

/***/ })

/******/ });
//# sourceMappingURL=scripts.js.map