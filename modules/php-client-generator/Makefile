SHELL := /bin/bash

CUR_UID := $(shell id -u)
CUR_GID := $(shell id -g)

mkfile_path := $(abspath $(lastword $(MAKEFILE_LIST)))
current_dir := $(dir $(mkfile_path))
openapi_generator = docker run --rm --user ${CUR_GID}:${CUR_UID} -v ${current_dir}/:/php-client-generator -v ${PWD}/:/php-client-${lower_service} openapitools/openapi-generator-cli:v7.0.1
lower_service = $(shell echo $(service) | sed -e 's/\(.*\)/\L\1/')
lower_service_non_dashed = $(shell echo $(service) | sed -e 's/\(.*\)/\L\1/'| sed -e 's/-//g')
ucf_service = $(shell echo $(service) | sed -e "s/\b\(.\)/\u\1/g")
ucf_service_non_dashed = $(shell echo $(service) | sed -e "s/\b\(.\)/\u\1/g"| sed -e 's/-//g')
artifact_version = $(shell if [ ! -z "${version}" ]; then echo "artifactVersion=${version},"; fi)

generate-php-client:
	[ ! -z "${service}" ] || (printf "\e[31mError: this command is meant to be execute from specific service client repo\e[0m\n"; exit 1) && \
	${openapi_generator} \
	generate -i php-client-generator/modules/proto/${lower_service}/${lower_service}.swagger.json \
	--git-repo-id php-client-${service} --git-user-id gemini-commerce --git-host github.com \
	-g php -t php-client-generator/templates/php -o php-client-${lower_service} \
	--additional-properties ${artifact_version}\
	licenseName=AGPL-3.0,invokerPackage="GeminiCommerce\\${ucf_service_non_dashed}"