<?php
/**
 * Date: 31.10.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace App\GraphQL\Mutation;

use App\GraphQL\Mutation\Todo\AddTodoField;
use App\GraphQL\Mutation\Todo\ClearCompletedField;
use App\GraphQL\Mutation\Todo\DestroyField;
use App\GraphQL\Mutation\Todo\SaveField;
use App\GraphQL\Mutation\Todo\ToggleAllField;
use App\GraphQL\Mutation\Todo\ToggleField;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class MutationType extends AbstractObjectType
{

    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            new AddTodoField(),
            new ToggleAllField(),
            new ToggleField(),
            new DestroyField(),
            new SaveField(),
            new ClearCompletedField()
        ]);
    }
}