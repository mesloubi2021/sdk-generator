<?php

namespace Tests;

class Ruby27Test extends Base
{
    protected string $language = 'ruby';
    protected string $class = 'Appwrite\SDK\Language\Ruby';
    protected array $build = [
        'docker run --rm -v $(pwd):/app -w /app/tests/sdks/ruby --env GEM_HOME=/app/vendor ruby:2.7-alpine sh -c "apk add git build-base && bundle install"',
    ];
    protected string $command =
        'docker run --rm -v $(pwd):/app -w /app --env GEM_HOME=vendor ruby:2.7-alpine ruby tests/languages/ruby/tests.rb';

    protected array $expectedOutput = [
        ...Base::FOO_RESPONSES,
        ...Base::BAR_RESPONSES,
        ...Base::GENERAL_RESPONSES,
        ...Base::LARGE_FILE_RESPONSES,
        ...Base::EXCEPTION_RESPONSES
    ];
}
