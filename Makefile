clear:
	rm -r lib || true
	rm -r docs || true
	rm -r test || true

generate:
	@@echo "Clearing old files..."
	make clear

	@@echo "Generating new client..."

	npx openapi-generator-cli generate \
		-i openapi.json \
		-g php \
		-o . \
		--invoker-package="Roxl\TBankApi" \
		--package-name="roxl\tbank-openapi" \
		--skip-validate-spec
	
format_json:
	jq --arg homepage "https://roxl.net/tbank-openapi-php" \
		--arg description "OpenApi client for TBankApi on PHP language" \
		--argjson keywords '["php","openapi","tbank","tinkoff"]' \
		--arg license "MIT" \
		--argjson authors '[{"name":"Roxl","homepage":"https://roxl.net"}]' \
		'.homepage = $$homepage | .keywords = $$keywords | .license = $$license | .authors = $$authors' \
		composer.json > composer.json.tmp && mv composer.json.tmp composer.json
