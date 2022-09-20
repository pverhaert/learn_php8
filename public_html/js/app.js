/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/***/ (() => {

if (window.history.length > 0) {
  document.querySelector('#back').classList.replace('none', 'fixed');
  document.querySelector('#back a').addEventListener('click', function () {
    window.history.back();
  });
}

/***/ }),

/***/ "./src/css/app.scss":
/*!**************************!*\
  !*** ./src/css/app.scss ***!
  \**************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nTypeError: Cannot read properties of undefined (reading 'config')\n    at getTailwindConfig (D:\\Sites_git\\learn_php8\\node_modules\\tailwindcss\\lib\\lib\\setupTrackingContext.js:81:62)\n    at D:\\Sites_git\\learn_php8\\node_modules\\tailwindcss\\lib\\lib\\setupTrackingContext.js:124:92\n    at D:\\Sites_git\\learn_php8\\node_modules\\tailwindcss\\lib\\processTailwindFeatures.js:37:11\n    at plugins (D:\\Sites_git\\learn_php8\\node_modules\\tailwindcss\\lib\\index.js:22:68)\n    at LazyResult.runOnRoot (D:\\Sites_git\\learn_php8\\node_modules\\postcss\\lib\\lazy-result.js:339:16)\n    at LazyResult.runAsync (D:\\Sites_git\\learn_php8\\node_modules\\postcss\\lib\\lazy-result.js:393:26)\n    at LazyResult.async (D:\\Sites_git\\learn_php8\\node_modules\\postcss\\lib\\lazy-result.js:221:30)\n    at LazyResult.then (D:\\Sites_git\\learn_php8\\node_modules\\postcss\\lib\\lazy-result.js:206:17)\n    at processResult (D:\\Sites_git\\learn_php8\\node_modules\\webpack\\lib\\NormalModule.js:751:19)\n    at D:\\Sites_git\\learn_php8\\node_modules\\webpack\\lib\\NormalModule.js:853:5\n    at D:\\Sites_git\\learn_php8\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at D:\\Sites_git\\learn_php8\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (D:\\Sites_git\\learn_php8\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (D:\\Sites_git\\learn_php8\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./src/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/css/app.scss"]();
/******/ 	
/******/ })()
;