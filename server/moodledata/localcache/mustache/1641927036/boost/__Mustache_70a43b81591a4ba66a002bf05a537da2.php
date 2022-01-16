<?php

class __Mustache_70a43b81591a4ba66a002bf05a537da2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row profileeditor">
';
        $buffer .= $indent . '    <div class="col align-self-end">
';
        $buffer .= $indent . '        <a tabindex="0" role="button" class="btn btn-secondary float-right" data-action="editcategory">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC4602107c7135258bd790fe827bcb4fa($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="categorieslist">
';
        // 'categories' section
        $value = $context->find('categories');
        $buffer .= $this->sectionEf33dda332c524a48e91b359ebd39166($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section4d8329abc9505e9294d47540fe74dc49($context, $indent, $value);

        return $buffer;
    }

    private function sectionC4602107c7135258bd790fe827bcb4fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'profilecreatecategory, admin';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'profilecreatecategory, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc1d4f1bf432cd9124ae3a835133dcf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edit{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb7fbbecea9fd85ae150d09f7c8636b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{baseurl}}?action=deletecategory&id={{id}}&sesskey={{sesskey}}">
                    {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?action=deletecategory&id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section620e7d879dadcbebf8d55b61edb38674(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moveup';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moveup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8c800e0f03f6059f2f88df151654df8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/up, core, {{#str}}moveup{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/up, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section620e7d879dadcbebf8d55b61edb38674($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9467b53b3eceb080957d0d3af88efbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'spacer, moodle';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'spacer, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90aa088343ee45d57d4fe9e9a6e90cab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}spacer, moodle{{/pix}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE9467b53b3eceb080957d0d3af88efbf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d4bab31d51544d1336a0b23972d18c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'movedown';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'movedown';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c79f22d94a2b0ce8f8f1ba3f1f96b5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/down, core, {{#str}}movedown{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/down, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7d4bab31d51544d1336a0b23972d18c4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8de664bdbde1877bb3f2991e26edf72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_menu}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71e1f30bf83cf2a7fe88a38d9eea5f35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'profilefield, admin';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'profilefield, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ad785a1c9a9a8e29b90cc25149e8dbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr>
                        <td class="col-8">
                            {{{name}}}
                        </td>
                        <td class="col-3 text-right">
                            <a href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}</a>
                            <a href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                            {{^isfirst}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                {{#pix}}t/up, core, {{#str}}moveup{{/str}}{{/pix}}</a>
                            {{/isfirst}}
                            {{#isfirst}}{{#pix}}spacer, moodle{{/pix}}{{/isfirst}}
                            {{^islast}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                {{#pix}}t/down, core, {{#str}}movedown{{/str}}{{/pix}}</a>
                            {{/islast}}
                            {{#islast}}{{#pix}}spacer, moodle{{/pix}}{{/islast}}
                        </td>
                    </tr>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr>
';
                $buffer .= $indent . '                        <td class="col-8">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td class="col-3 text-right">
';
                $buffer .= $indent . '                            <a href="#" data-action="editfield" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFc1d4f1bf432cd9124ae3a835133dcf6($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?action=deletefield&id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '</a>
';
                // 'isfirst' inverted section
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&action=movefield&dir=up&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionC8c800e0f03f6059f2f88df151654df8($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '                            ';
                // 'isfirst' section
                $value = $context->find('isfirst');
                $buffer .= $this->section90aa088343ee45d57d4fe9e9a6e90cab($context, $indent, $value);
                $buffer .= '
';
                // 'islast' inverted section
                $value = $context->find('islast');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&action=movefield&dir=down&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section0c79f22d94a2b0ce8f8f1ba3f1f96b5f($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '                            ';
                // 'islast' section
                $value = $context->find('islast');
                $buffer .= $this->section90aa088343ee45d57d4fe9e9a6e90cab($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section274142464b6f459a5b318fbd6b4b6a7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <thead>
                <tr>
                    <th scope="col" class="col-8">{{#str}}profilefield, admin{{/str}}</th>
                    <th scope="col" class="col-3 text-right">{{#str}}edit{{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#fields}}
                    <tr>
                        <td class="col-8">
                            {{{name}}}
                        </td>
                        <td class="col-3 text-right">
                            <a href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}</a>
                            <a href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                            {{^isfirst}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                {{#pix}}t/up, core, {{#str}}moveup{{/str}}{{/pix}}</a>
                            {{/isfirst}}
                            {{#isfirst}}{{#pix}}spacer, moodle{{/pix}}{{/isfirst}}
                            {{^islast}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                {{#pix}}t/down, core, {{#str}}movedown{{/str}}{{/pix}}</a>
                            {{/islast}}
                            {{#islast}}{{#pix}}spacer, moodle{{/pix}}{{/islast}}
                        </td>
                    </tr>
                {{/fields}}
            </tbody>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <th scope="col" class="col-8">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section71e1f30bf83cf2a7fe88a38d9eea5f35($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-3 text-right">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                // 'fields' section
                $value = $context->find('fields');
                $buffer .= $this->section4ad785a1c9a9a8e29b90cc25149e8dbb($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA878346c1c185ae0ea4729e0a7c6063f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'profilenofieldsdefined, admin';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'profilenofieldsdefined, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf33dda332c524a48e91b359ebd39166(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-category-id="{{id}}" id="category-{{id}}" class="mt-2">
    <div class="row justify-content-between align-items-end">
        <div class="col-6 categoryinstance">
            <h3>
                {{{name}}}
                <a href="#" data-action="editcategory" data-id="{{id}}" data-name="{{name}}">
                    {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}</a>
                {{#candelete}}
                    <a href="{{baseurl}}?action=deletecategory&id={{id}}&sesskey={{sesskey}}">
                    {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                {{/candelete}}
                {{^isfirst}}
                    <a href="{{baseurl}}?id={{id}}&action=movecategory&dir=up&amp;sesskey={{sesskey}}">
                    {{#pix}}t/up, core, {{#str}}moveup{{/str}}{{/pix}}</a>
                {{/isfirst}}
                {{#isfirst}}{{#pix}}spacer, moodle{{/pix}}{{/isfirst}}
                {{^islast}}
                    <a href="{{baseurl}}?id={{id}}&action=movecategory&dir=down&amp;sesskey={{sesskey}}">
                    {{#pix}}t/down, core, {{#str}}movedown{{/str}}{{/pix}}</a>
                {{/islast}}
            </h3>
        </div>
        <div class="col-auto text-right">
            {{#addfieldmenu}}{{> core/action_menu}}{{/addfieldmenu}}
        </div>
    </div>

    <table class="generaltable fullwidth profilefield">
        {{#hasfields}}
            <thead>
                <tr>
                    <th scope="col" class="col-8">{{#str}}profilefield, admin{{/str}}</th>
                    <th scope="col" class="col-3 text-right">{{#str}}edit{{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#fields}}
                    <tr>
                        <td class="col-8">
                            {{{name}}}
                        </td>
                        <td class="col-3 text-right">
                            <a href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}</a>
                            <a href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                            {{^isfirst}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                {{#pix}}t/up, core, {{#str}}moveup{{/str}}{{/pix}}</a>
                            {{/isfirst}}
                            {{#isfirst}}{{#pix}}spacer, moodle{{/pix}}{{/isfirst}}
                            {{^islast}}
                                <a href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                {{#pix}}t/down, core, {{#str}}movedown{{/str}}{{/pix}}</a>
                            {{/islast}}
                            {{#islast}}{{#pix}}spacer, moodle{{/pix}}{{/islast}}
                        </td>
                    </tr>
                {{/fields}}
            </tbody>
        {{/hasfields}}
        {{^hasfields}}
            <thead>
                <tr class="nofields alert alert-danger alert-block fade in">
                    <td>
                        {{#str}}profilenofieldsdefined, admin{{/str}}
                    </td>
                </tr>
            </thead>
        {{/hasfields}}
    </table>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-category-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="category-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="mt-2">
';
                $buffer .= $indent . '    <div class="row justify-content-between align-items-end">
';
                $buffer .= $indent . '        <div class="col-6 categoryinstance">
';
                $buffer .= $indent . '            <h3>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                <a href="#" data-action="editcategory" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFc1d4f1bf432cd9124ae3a835133dcf6($context, $indent, $value);
                $buffer .= '</a>
';
                // 'candelete' section
                $value = $context->find('candelete');
                $buffer .= $this->sectionBb7fbbecea9fd85ae150d09f7c8636b6($context, $indent, $value);
                // 'isfirst' inverted section
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&action=movecategory&dir=up&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionC8c800e0f03f6059f2f88df151654df8($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '                ';
                // 'isfirst' section
                $value = $context->find('isfirst');
                $buffer .= $this->section90aa088343ee45d57d4fe9e9a6e90cab($context, $indent, $value);
                $buffer .= '
';
                // 'islast' inverted section
                $value = $context->find('islast');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&action=movecategory&dir=down&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section0c79f22d94a2b0ce8f8f1ba3f1f96b5f($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="col-auto text-right">
';
                $buffer .= $indent . '            ';
                // 'addfieldmenu' section
                $value = $context->find('addfieldmenu');
                $buffer .= $this->sectionA8de664bdbde1877bb3f2991e26edf72($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <table class="generaltable fullwidth profilefield">
';
                // 'hasfields' section
                $value = $context->find('hasfields');
                $buffer .= $this->section274142464b6f459a5b318fbd6b4b6a7c($context, $indent, $value);
                // 'hasfields' inverted section
                $value = $context->find('hasfields');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <thead>
';
                    $buffer .= $indent . '                <tr class="nofields alert alert-danger alert-block fade in">
';
                    $buffer .= $indent . '                    <td>
';
                    $buffer .= $indent . '                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionA878346c1c185ae0ea4729e0a7c6063f($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </td>
';
                    $buffer .= $indent . '                </tr>
';
                    $buffer .= $indent . '            </thead>
';
                }
                $buffer .= $indent . '    </table>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d8329abc9505e9294d47540fe74dc49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_user/edit_profile_fields\'], function(s) {
        s.init();
    });
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_user/edit_profile_fields\'], function(s) {
';
                $buffer .= $indent . '        s.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
