generate:
	openapi-generator generate \
		-i openapi.json \
		-g php \
		-o . \
		--invoker-package="TinkoffApi" \
		--skip-validate-spec