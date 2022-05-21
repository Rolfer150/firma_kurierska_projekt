/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete1.js":
/*!*********************************!*\
  !*** ./resources/js/delete1.js ***!
  \*********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Czy na pewno chcesz usunąć paczkę?',\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonText: 'Tak',\n      cancelButtonText: 'Nie'\n    }).then(function (result) {\n      if (result.value) {\n        $.ajax({\n          method: \"DELETE\",\n          url: deleteUrl + $(_this).data(\"id\")\n        }).done(function (data) {\n          window.location.reload();\n        }).fail(function (data) {\n          Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwiaWNvbiIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJ0aGVuIiwicmVzdWx0IiwidmFsdWUiLCJhamF4IiwibWV0aG9kIiwidXJsIiwiZGVsZXRlVXJsIiwiZGF0YSIsImRvbmUiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCIsImZhaWwiLCJyZXNwb25zZUpTT04iLCJtZXNzYWdlIiwic3RhdHVzIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9kZWxldGUxLmpzPzQwNTMiXSwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpIHtcbiAgICAkKCcuZGVsZXRlJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICAgICBTd2FsLmZpcmUoe1xuICAgICAgICAgICAgdGl0bGU6ICdDenkgbmEgcGV3bm8gY2hjZXN6IHVzdW7EhcSHIHBhY3prxJk/JyxcbiAgICAgICAgICAgIGljb246ICd3YXJuaW5nJyxcbiAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogJ1RhaycsXG4gICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnTmllJ1xuICAgICAgICB9KS50aGVuKChyZXN1bHQpID0+IHtcbiAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcbiAgICAgICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6XCJERUxFVEVcIixcbiAgICAgICAgICAgICAgICAgICAgdXJsOiBkZWxldGVVcmwgKyAkKHRoaXMpLmRhdGEoXCJpZFwiKVxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgIC5kb25lKGZ1bmN0aW9uKGRhdGEpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgLmZhaWwoZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKCdPb3BzLi4uJywgZGF0YS5yZXNwb25zZUpTT04ubWVzc2FnZSwgZGF0YS5yZXNwb25zZUpTT04uc3RhdHVzKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pXG4gICAgfSk7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxZQUFXO0VBQ1RBLENBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYUMsS0FBYixDQUFtQixZQUFZO0lBQUE7O0lBQzNCQyxJQUFJLENBQUNDLElBQUwsQ0FBVTtNQUNOQyxLQUFLLEVBQUUsb0NBREQ7TUFFTkMsSUFBSSxFQUFFLFNBRkE7TUFHTkMsZ0JBQWdCLEVBQUUsSUFIWjtNQUlOQyxpQkFBaUIsRUFBRSxLQUpiO01BS05DLGdCQUFnQixFQUFFO0lBTFosQ0FBVixFQU1HQyxJQU5ILENBTVEsVUFBQ0MsTUFBRCxFQUFZO01BQ2hCLElBQUlBLE1BQU0sQ0FBQ0MsS0FBWCxFQUFrQjtRQUNkWCxDQUFDLENBQUNZLElBQUYsQ0FBTztVQUNIQyxNQUFNLEVBQUMsUUFESjtVQUVIQyxHQUFHLEVBQUVDLFNBQVMsR0FBR2YsQ0FBQyxDQUFDLEtBQUQsQ0FBRCxDQUFRZ0IsSUFBUixDQUFhLElBQWI7UUFGZCxDQUFQLEVBSUtDLElBSkwsQ0FJVSxVQUFTRCxJQUFULEVBQWU7VUFDakJFLE1BQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEI7UUFDSCxDQU5MLEVBT0tDLElBUEwsQ0FPVSxVQUFTTCxJQUFULEVBQWU7VUFDakJkLElBQUksQ0FBQ0MsSUFBTCxDQUFVLFNBQVYsRUFBcUJhLElBQUksQ0FBQ00sWUFBTCxDQUFrQkMsT0FBdkMsRUFBZ0RQLElBQUksQ0FBQ00sWUFBTCxDQUFrQkUsTUFBbEU7UUFDSCxDQVRMO01BVUg7SUFDSixDQW5CRDtFQW9CSCxDQXJCRDtBQXNCSCxDQXZCQSxDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2RlbGV0ZTEuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/delete1.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete1.js"]();
/******/ 	
/******/ })()
;