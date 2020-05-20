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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/blocks-index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/blocks-index.js":
/*!***********************************!*\
  !*** ./assets/js/blocks-index.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_gutenberg_home_block_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/gutenberg-home-block.js */ "./assets/js/blocks/gutenberg-home-block.js");


/***/ }),

/***/ "./assets/js/blocks/gutenberg-home-block.js":
/*!**************************************************!*\
  !*** ./assets/js/blocks/gutenberg-home-block.js ***!
  \**************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

var __ = wp.i18n.__;
var registerBlockType = wp.blocks.registerBlockType;
var _wp$editor = wp.editor,
    RichText = _wp$editor.RichText,
    InspectorControls = _wp$editor.InspectorControls,
    ColorPalette = _wp$editor.ColorPalette,
    blockControls = _wp$editor.blockControls;
var PanelBody = wp.components.PanelBody;
registerBlockType('rafaelbriet/home-page', {
  title: __('Texto da Página Inicial', 'rafaelbriet'),
  description: __('Texto personalizado para a página inicial', 'rafaelbriet'),
  icon: 'format-image',
  category: 'formatting',
  attributes: {
    header: {
      type: 'string',
      source: 'html',
      selector: 'h2'
    },
    headerColor: {
      type: 'string',
      default: 'black'
    },
    headerBackgroundColor: {
      type: 'string'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    },
    bodyColor: {
      type: 'string',
      default: 'black'
    },
    bodyBackgroundColor: {
      type: 'string'
    }
  },
  edit: function edit(_ref) {
    var attributes = _ref.attributes,
        setAttributes = _ref.setAttributes;
    var header = attributes.header,
        headerColor = attributes.headerColor,
        headerBackgroundColor = attributes.headerBackgroundColor,
        body = attributes.body,
        bodyColor = attributes.bodyColor,
        bodyBackgroundColor = attributes.bodyBackgroundColor;

    function OnHeaderChange(newValue) {
      setAttributes({
        header: newValue
      });
    }

    function OnHeaderColorChange(newValue) {
      setAttributes({
        headerColor: newValue
      });
    }

    function OnHeaderBackgroundColorChange(newValue) {
      setAttributes({
        headerBackgroundColor: newValue
      });
    }

    function OnBodyChange(newValue) {
      setAttributes({
        body: newValue
      });
    }

    function OnBodyColorChange(newValue) {
      setAttributes({
        bodyColor: newValue
      });
    }

    function OnBodyBackgroundColorChange(newValue) {
      setAttributes({
        bodyBackgroundColor: newValue
      });
    }

    return [Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InspectorControls, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(PanelBody, {
      title: __('Configurações do cabeçalho', 'rafaelbriet')
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, __('Cor do texto', 'rafaelbriet')), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ColorPalette, {
      value: headerColor,
      onChange: OnHeaderColorChange
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, __('Cor do fundo', 'rafaelbriet')), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ColorPalette, {
      value: headerBackgroundColor,
      onChange: OnHeaderBackgroundColorChange
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(PanelBody, {
      title: __('Configurações do corpo', 'rafaelbriet')
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, __('Cor do texto', 'rafaelbriet')), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ColorPalette, {
      value: bodyColor,
      onChange: OnBodyColorChange
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, __('Cor do fundo', 'rafaelbriet')), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ColorPalette, {
      value: bodyBackgroundColor,
      onChange: OnBodyBackgroundColorChange
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "home-block-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h2", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      key: "editable",
      tagName: "span",
      className: "home-block-header",
      placeholder: __('Cabeçalho', 'rafaelbriet'),
      value: header,
      onChange: OnHeaderChange,
      style: {
        color: headerColor,
        backgroundColor: headerBackgroundColor
      }
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      key: "editable",
      tagName: "span",
      className: "home-block-p",
      placeholder: __('Texto', 'rafaelbriet'),
      value: body,
      onChange: OnBodyChange,
      style: {
        color: bodyColor,
        backgroundColor: bodyBackgroundColor
      }
    })))];
  },
  save: function save(_ref2) {
    var attributes = _ref2.attributes;
    var header = attributes.header,
        headerColor = attributes.headerColor,
        headerBackgroundColor = attributes.headerBackgroundColor,
        body = attributes.body,
        bodyColor = attributes.bodyColor,
        bodyBackgroundColor = attributes.bodyBackgroundColor;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "home-block-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h2", {
      className: "home-block-header"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      tagName: "span",
      value: header,
      style: {
        color: headerColor,
        backgroundColor: headerBackgroundColor
      }
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
      className: "home-block-p"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      tagName: "span",
      value: body,
      style: {
        color: bodyColor,
        backgroundColor: bodyBackgroundColor
      }
    })));
  }
});

/***/ }),

/***/ "@wordpress/element":
/*!******************************************!*\
  !*** external {"this":["wp","element"]} ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["element"]; }());

/***/ })

/******/ });
//# sourceMappingURL=blocks.js.map