<?php

namespace App\GraphQL\Mutations;

use App\Models\Models\Contact;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class DeleteContactMutation
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->delete();

        return $args['id'];
    }
}
