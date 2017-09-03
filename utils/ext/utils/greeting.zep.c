
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/string.h"


ZEPHIR_INIT_CLASS(Utils_Greeting) {

	ZEPHIR_REGISTER_CLASS(Utils, Greeting, utils, greeting, utils_greeting_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Utils_Greeting, say) {

	zval a, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&a);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&a);
	ZVAL_STRING(&a, "hello world");
	ZEPHIR_INIT_VAR(&_0);
	zephir_fast_strtoupper(&_0, &a);
	zend_print_zval(&_0, 0);
	ZEPHIR_MM_RESTORE();

}

