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
		--invoker-package Roxl\\\\TBankApi \
		--package-name roxl/tbankapi \
		--api-package Api \
		--model-package Models \
		--skip-validate-spec
	
	make update-composer
	make update-gitignore
	
update-composer:
	jq '.name = "roxl\/tbankapi" | .homepage = "https://roxl.net/tbank-openapi-php" | .description = "OpenApi client for TBankApi on PHP language" | .license = "MIT" | .authors = [{name:"Roxl",homepage:"https://roxl.net"}] | .keywords = ["php","openapi","tbank","tinkoff"]' \
	composer.json > composer.json.tmp && mv composer.json.tmp composer.json

update-gitignore:
	echo "node_modules" >> .gitignore