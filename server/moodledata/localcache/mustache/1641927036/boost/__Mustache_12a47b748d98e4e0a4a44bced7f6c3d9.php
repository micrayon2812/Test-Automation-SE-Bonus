<?php

class __Mustache_12a47b748d98e4e0a4a44bced7f6c3d9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('baseurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="get" id="createbackpack">
';
        $buffer .= $indent . '   <input type="hidden" name="action" value="edit"/>
';
        $buffer .= $indent . '   <button type="submit" class="btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2601a53b6749795652701c3e37fa26c8($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<table class="generaltable fullwidth" id="backpacklist">
';
        $buffer .= $indent . '    <caption>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7254ef3f71ff2927abe6e02bbff24b75($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE0231f25168e5b4f7c44192d36f35dc8($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6adebb3683e4380ff58474d09f7449cb($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4105fc8d625922f4e27f852754f80475($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        // 'backpacks' section
        $value = $context->find('backpacks');
        $buffer .= $this->section7f2eb5e7b05707664f2168ada2c746d1($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section2601a53b6749795652701c3e37fa26c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newbackpack, core_badges';
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
                
                $buffer .= 'newbackpack, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7254ef3f71ff2927abe6e02bbff24b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'listbackpacks, core_badges';
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
                
                $buffer .= 'listbackpacks, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0231f25168e5b4f7c44192d36f35dc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'backpackweburl, core_badges';
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
                
                $buffer .= 'backpackweburl, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6adebb3683e4380ff58474d09f7449cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'order';
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
                
                $buffer .= 'order';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4105fc8d625922f4e27f852754f80475(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, core_badges';
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
                
                $buffer .= 'actions, core_badges';
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

    private function section479d81879b2d9c4606962914f791c994(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/up, core,{{#str}}moveup{{/str}}';
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
                
                $buffer .= 't/up, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section620e7d879dadcbebf8d55b61edb38674($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section066d6f9e3024ac29776223e880aca103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{baseurl}}?id={{id}}&action=moveup">{{#pix}}t/up, core,{{#str}}moveup{{/str}}{{/pix}}</a>
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
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=moveup">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section479d81879b2d9c4606962914f791c994($context, $indent, $value);
                $buffer .= '</a>
';
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

    private function section620011c15cac05412fdfde591eed8153(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/down, core,{{#str}}movedown{{/str}}';
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
                
                $buffer .= 't/down, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7d4bab31d51544d1336a0b23972d18c4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57911c25596a2780176a59afb24ce436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{baseurl}}?id={{id}}&action=movedown">{{#pix}}t/down, core,{{#str}}movedown{{/str}}{{/pix}}</a>
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
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=movedown">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section620011c15cac05412fdfde591eed8153($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb349a181ed9d49e19d879da5efd4de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsettings';
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
                
                $buffer .= 'editsettings';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82369141a8c30400ef4727dfad7127d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core,{{#str}}editsettings{{/str}}';
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
                
                $buffer .= 't/edit, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0bb349a181ed9d49e19d879da5efd4de($context, $indent, $value);
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

    private function section8b32652fa70913eed0d2f14d408d2231(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core,{{#str}}delete{{/str}}';
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
                
                $buffer .= 't/delete, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08769f2c5b3e2efc86ecac9884091fca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'testsettings, core_badges';
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
                
                $buffer .= 'testsettings, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA48a2363eba4d70ab9fefdee785cba75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/check, core,{{#str}}testsettings, core_badges{{/str}}';
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
                
                $buffer .= 't/check, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section08769f2c5b3e2efc86ecac9884091fca($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60fbdaee08a74474d2bb9c8b1b7e928a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{baseurl}}?id={{id}}&action=test">{{#pix}}t/check, core,{{#str}}testsettings, core_badges{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=test">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionA48a2363eba4d70ab9fefdee785cba75($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f2eb5e7b05707664f2168ada2c746d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-backpackurl="{{{backpackweburl}}}">
            <td> {{{backpackweburl}}} </td>
            <td>
                {{#canmoveup}}
                    <a href="{{baseurl}}?id={{id}}&action=moveup">{{#pix}}t/up, core,{{#str}}moveup{{/str}}{{/pix}}</a>
                {{/canmoveup}}
                {{^canmoveup}}
                    {{#pix}}spacer, moodle{{/pix}}
                {{/canmoveup}}
                {{#canmovedown}}
                    <a href="{{baseurl}}?id={{id}}&action=movedown">{{#pix}}t/down, core,{{#str}}movedown{{/str}}{{/pix}}</a>
                {{/canmovedown}}
                {{^canmovedown}}
                    {{#pix}}spacer, moodle{{/pix}}
                {{/canmovedown}}
            </td>
            <td>
                <a href="{{baseurl}}?id={{id}}&action=edit">{{#pix}}t/edit, core,{{#str}}editsettings{{/str}}{{/pix}}</a>
            {{^sitebackpack}}
                <a href="{{baseurl}}?id={{id}}&action=delete" role="button" data-action="deletebackpack">
                    {{#pix}}t/delete, core,{{#str}}delete{{/str}}{{/pix}}
                </a>
            {{/sitebackpack}}
            {{#cantest}}
                <a href="{{baseurl}}?id={{id}}&action=test">{{#pix}}t/check, core,{{#str}}testsettings, core_badges{{/str}}{{/pix}}</a>
            {{/cantest}}
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
                
                $buffer .= $indent . '        <tr data-backpackurl="';
                $value = $this->resolveValue($context->find('backpackweburl'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <td> ';
                $value = $this->resolveValue($context->find('backpackweburl'), $context);
                $buffer .= $value;
                $buffer .= ' </td>
';
                $buffer .= $indent . '            <td>
';
                // 'canmoveup' section
                $value = $context->find('canmoveup');
                $buffer .= $this->section066d6f9e3024ac29776223e880aca103($context, $indent, $value);
                // 'canmoveup' inverted section
                $value = $context->find('canmoveup');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionE9467b53b3eceb080957d0d3af88efbf($context, $indent, $value);
                    $buffer .= '
';
                }
                // 'canmovedown' section
                $value = $context->find('canmovedown');
                $buffer .= $this->section57911c25596a2780176a59afb24ce436($context, $indent, $value);
                // 'canmovedown' inverted section
                $value = $context->find('canmovedown');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionE9467b53b3eceb080957d0d3af88efbf($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=edit">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section82369141a8c30400ef4727dfad7127d5($context, $indent, $value);
                $buffer .= '</a>
';
                // 'sitebackpack' inverted section
                $value = $context->find('sitebackpack');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&action=delete" role="button" data-action="deletebackpack">
';
                    $buffer .= $indent . '                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section8b32652fa70913eed0d2f14d408d2231($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </a>
';
                }
                // 'cantest' section
                $value = $context->find('cantest');
                $buffer .= $this->section60fbdaee08a74474d2bb9c8b1b7e928a($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
