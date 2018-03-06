webpackJsonp([3],{

/***/ 17:
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(53)

var Component = __webpack_require__(9)(
  /* script */
  __webpack_require__(47),
  /* template */
  __webpack_require__(60),
  /* scopeId */
  "data-v-8e114958",
  /* cssModules */
  null
)
Component.options.__file = "D:\\vue\\timeline_backend\\src\\views\\Layout\\index.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] index.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-8e114958", Component.options)
  } else {
    hotAPI.reload("data-v-8e114958", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 47:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            isCollapsed: false
        };
    },

    computed: {
        menuitemClasses: function menuitemClasses() {
            return ['menu-item', this.isCollapsed ? 'collapsed-menu' : ''];
        }
    }
});

/***/ }),

/***/ 53:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 60:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "layout"
  }, [_c('Layout', {
    style: ({
      minHeight: '100vh'
    })
  }, [_c('Sider', {
    attrs: {
      "collapsible": "",
      "collapsed-width": 78
    },
    model: {
      value: (_vm.isCollapsed),
      callback: function($$v) {
        _vm.isCollapsed = $$v
      },
      expression: "isCollapsed"
    }
  }, [_c('Menu', {
    class: _vm.menuitemClasses,
    attrs: {
      "active-name": "1-2",
      "theme": "dark",
      "width": "auto"
    }
  }, [_c('MenuItem', {
    attrs: {
      "name": "1-1"
    }
  }, [_c('Icon', {
    attrs: {
      "type": "ios-navigate"
    }
  }), _vm._v(" "), _c('span', [_vm._v("Option 1")])], 1), _vm._v(" "), _c('MenuItem', {
    attrs: {
      "name": "1-2"
    }
  }, [_c('Icon', {
    attrs: {
      "type": "search"
    }
  }), _vm._v(" "), _c('span', [_vm._v("Option 2")])], 1), _vm._v(" "), _c('MenuItem', {
    attrs: {
      "name": "1-3"
    }
  }, [_c('Icon', {
    attrs: {
      "type": "settings"
    }
  }), _vm._v(" "), _c('span', [_vm._v("Option 3")])], 1)], 1)], 1), _vm._v(" "), _c('Layout', [_c('Header', {
    style: ({
      background: '#fff',
      boxShadow: '0 2px 3px 2px rgba(0,0,0,.1)'
    })
  }), _vm._v(" "), _c('Content', {
    style: ({
      padding: '0 16px 16px'
    })
  }, [_c('Breadcrumb', {
    style: ({
      margin: '16px 0'
    })
  }, [_c('BreadcrumbItem', [_vm._v("Home")]), _vm._v(" "), _c('BreadcrumbItem', [_vm._v("Components")]), _vm._v(" "), _c('BreadcrumbItem', [_vm._v("Layout")])], 1), _vm._v(" "), _c('Card', [_c('div', {
    staticStyle: {
      "height": "600px"
    }
  }, [_c('router-view')], 1)])], 1)], 1)], 1)], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-8e114958", module.exports)
  }
}

/***/ })

});
//# sourceMappingURL=3.chunk.js.map