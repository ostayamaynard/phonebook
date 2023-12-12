<?php

namespace App\GraphQL\Resolvers;

use App\Models\Models\Contact;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MutationResolvers
{
    public function createContact($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Contact::create($args['input']);
    }

    public function updateContact($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->update($args['input']);
        return $contact;
    }

    public function deleteContact($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->delete();
        return $args['id'];
    }
}
