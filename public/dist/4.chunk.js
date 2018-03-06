webpackJsonp([4],{

/***/ 20:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(9)(
  /* script */
  __webpack_require__(50),
  /* template */
  __webpack_require__(58),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "D:\\vue\\timeline_backend\\src\\views\\timeline\\detail.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] detail.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-loader/node_modules/vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4e37e928", Component.options)
  } else {
    hotAPI.reload("data-v-4e37e928", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 50:
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
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            formValidate: {
                name: '',
                mail: '',
                city: '',
                gender: '',
                interest: [],
                date: '',
                time: '',
                desc: ''
            },
            ruleValidate: {
                name: [{ required: true, message: 'The name cannot be empty', trigger: 'blur' }],
                mail: [{ required: true, message: 'Mailbox cannot be empty', trigger: 'blur' }, { type: 'email', message: 'Incorrect email format', trigger: 'blur' }],
                city: [{ required: true, message: 'Please select the city', trigger: 'change' }],
                gender: [{ required: true, message: 'Please select gender', trigger: 'change' }],
                interest: [{ required: true, type: 'array', min: 1, message: 'Choose at least one hobby', trigger: 'change' }, { type: 'array', max: 2, message: 'Choose two hobbies at best', trigger: 'change' }],
                date: [{ required: true, type: 'date', message: 'Please select the date', trigger: 'change' }],
                time: [{ required: true, type: 'date', message: 'Please select time', trigger: 'change' }],
                desc: [{ required: true, message: 'Please enter a personal introduction', trigger: 'blur' }, { type: 'string', min: 20, message: 'Introduce no less than 20 words', trigger: 'blur' }]
            }
        };
    },

    methods: {
        handleSubmit: function handleSubmit(name) {
            var _this = this;

            this.$refs[name].validate(function (valid) {
                if (valid) {
                    _this.$Message.success('Success!');
                } else {
                    _this.$Message.error('Fail!');
                }
            });
        },
        handleReset: function handleReset(name) {
            this.$refs[name].resetFields();
        }
    }
});

/***/ }),

/***/ 58:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('Form', {
    ref: "formValidate",
    attrs: {
      "model": _vm.formValidate,
      "rules": _vm.ruleValidate,
      "label-width": 80
    }
  }, [_c('FormItem', {
    attrs: {
      "label": "标题",
      "prop": "title"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your name"
    },
    model: {
      value: (_vm.formValidate.name),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "name", $$v)
      },
      expression: "formValidate.name"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "内容",
      "prop": "content"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "摘要",
      "prop": "desc"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "心情",
      "prop": "mood"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "昵称",
      "prop": "author"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "地点",
      "prop": "address"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "天气",
      "prop": "weather"
    }
  }, [_c('Input', {
    attrs: {
      "placeholder": "Enter your e-mail"
    },
    model: {
      value: (_vm.formValidate.mail),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "mail", $$v)
      },
      expression: "formValidate.mail"
    }
  })], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "City",
      "prop": "city"
    }
  }, [_c('Select', {
    attrs: {
      "placeholder": "Select your city"
    },
    model: {
      value: (_vm.formValidate.city),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "city", $$v)
      },
      expression: "formValidate.city"
    }
  }, [_c('Option', {
    attrs: {
      "value": "beijing"
    }
  }, [_vm._v("New York")]), _vm._v(" "), _c('Option', {
    attrs: {
      "value": "shanghai"
    }
  }, [_vm._v("London")]), _vm._v(" "), _c('Option', {
    attrs: {
      "value": "shenzhen"
    }
  }, [_vm._v("Sydney")])], 1)], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "Date"
    }
  }, [_c('Row', [_c('Col', {
    attrs: {
      "span": "11"
    }
  }, [_c('FormItem', {
    attrs: {
      "prop": "date"
    }
  }, [_c('DatePicker', {
    attrs: {
      "type": "date",
      "placeholder": "Select date"
    },
    model: {
      value: (_vm.formValidate.date),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "date", $$v)
      },
      expression: "formValidate.date"
    }
  })], 1)], 1), _vm._v(" "), _c('Col', {
    staticStyle: {
      "text-align": "center"
    },
    attrs: {
      "span": "2"
    }
  }, [_vm._v("-")]), _vm._v(" "), _c('Col', {
    attrs: {
      "span": "11"
    }
  }, [_c('FormItem', {
    attrs: {
      "prop": "time"
    }
  }, [_c('TimePicker', {
    attrs: {
      "type": "time",
      "placeholder": "Select time"
    },
    model: {
      value: (_vm.formValidate.time),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "time", $$v)
      },
      expression: "formValidate.time"
    }
  })], 1)], 1)], 1)], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "Gender",
      "prop": "gender"
    }
  }, [_c('RadioGroup', {
    model: {
      value: (_vm.formValidate.gender),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "gender", $$v)
      },
      expression: "formValidate.gender"
    }
  }, [_c('Radio', {
    attrs: {
      "label": "male"
    }
  }, [_vm._v("Male")]), _vm._v(" "), _c('Radio', {
    attrs: {
      "label": "female"
    }
  }, [_vm._v("Female")])], 1)], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "Hobby",
      "prop": "interest"
    }
  }, [_c('CheckboxGroup', {
    model: {
      value: (_vm.formValidate.interest),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "interest", $$v)
      },
      expression: "formValidate.interest"
    }
  }, [_c('Checkbox', {
    attrs: {
      "label": "Eat"
    }
  }), _vm._v(" "), _c('Checkbox', {
    attrs: {
      "label": "Sleep"
    }
  }), _vm._v(" "), _c('Checkbox', {
    attrs: {
      "label": "Run"
    }
  }), _vm._v(" "), _c('Checkbox', {
    attrs: {
      "label": "Movie"
    }
  })], 1)], 1), _vm._v(" "), _c('FormItem', {
    attrs: {
      "label": "Desc",
      "prop": "desc"
    }
  }, [_c('Input', {
    attrs: {
      "type": "textarea",
      "autosize": {
        minRows: 2,
        maxRows: 5
      },
      "placeholder": "Enter something..."
    },
    model: {
      value: (_vm.formValidate.desc),
      callback: function($$v) {
        _vm.$set(_vm.formValidate, "desc", $$v)
      },
      expression: "formValidate.desc"
    }
  })], 1), _vm._v(" "), _c('FormItem', [_c('Button', {
    attrs: {
      "type": "primary"
    },
    on: {
      "click": function($event) {
        _vm.handleSubmit('formValidate')
      }
    }
  }, [_vm._v("Submit")]), _vm._v(" "), _c('Button', {
    staticStyle: {
      "margin-left": "8px"
    },
    attrs: {
      "type": "ghost"
    },
    on: {
      "click": function($event) {
        _vm.handleReset('formValidate')
      }
    }
  }, [_vm._v("Reset")])], 1)], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-loader/node_modules/vue-hot-reload-api").rerender("data-v-4e37e928", module.exports)
  }
}

/***/ })

});
//# sourceMappingURL=4.chunk.js.map