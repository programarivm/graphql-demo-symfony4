<?php

namespace App\GraphQL;

use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Type\Object\ObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;

class Schema extends AbstractSchema
{
    public function build(SchemaConfig $config)
    {
        $config->setQuery(
            new ObjectType([
                'name' => 'RootQueryType',
                'fields' => [
                    'greeting' => [
                        'type' => new StringType(),
                        'resolve' => function() {
                            return "Hello world!";
                        }
                    ]
                ]
            ])
        );
    }
}
