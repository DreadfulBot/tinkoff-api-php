generate:
	openapi-generator generate \
		-i openapi.json \
		-g php \
		-o . \
		--skip-validate-spec