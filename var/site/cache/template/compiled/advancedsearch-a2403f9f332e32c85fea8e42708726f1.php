<?php
// URI:       design:content/advancedsearch.tpl
// Filename:  design/delta/templates/content/advancedsearch.tpl
// Timestamp: 1769273526 (Sat Jan 24 8:52:06 PST 2026)
$oldSetArray_fd5c326e5b5f3fcf449f4ee0389411a2 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/site/cache/template/compiled/common.php' );

// def $search
if ( $tpl->hasVariable( 'search', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'search' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 19,
    2 => 20,
  ),
  2 => 'design/delta/templates/content/advancedsearch.tpl',
) );
    $tpl->setVariable( 'search', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'search', false, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_template_search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_template_search'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 10;
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 1:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 5;
}
$text .= '    ';
    } break;
    case 2:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 10;
}
$text .= '    ';
    } break;
    case 3:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 20;
}
$text .= '    ';
    } break;
    case 4:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 30;
}
$text .= '    ';
    } break;
    case 5:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 50;
}
$text .= '    ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'offset' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_attribute_id'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentSearch' ),
  array_values( array(     'text' => $var1,
    'subtree_array' => $var2,
    'offset' => $var3,
    'limit' => $var4,
    'publish_timestamp' => false,
    'publish_date' => $var5,
    'section_id' => $var6,
    'class_id' => $var7,
    'class_attribute_id' => $var8,
    'ignore_visibility' => null,
    'limitation' => null,
    'sort_by' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'SearchResult' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_result', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_result'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'SearchCount' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_count'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'StopWordArray' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'stop_word_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['stop_word_array'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_data', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_data'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
<div class="border-box">
    <div class="border-tl">
        <div class="border-tr">
            <div class="border-tc"></div>
        </div>
    </div>
    <div class="border-ml">
        <div class="border-mr">
            <div class="border-mc float-break">

                <div class="content-advancedsearch">

                    <form action="/content/advancedsearch" method="get">
                        <div class="attribute-header">
                            <h2 class="section-title">
                                Advanced search</h2>
                        </div>

                        <div class="form-group">
                            <label
                                class="form-label">Search all the words</label>
                            <input class="form-control" type="text" size="40" name="SearchText"
                                value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'full_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['full_search_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
                        </div>
                        <div class="form-group">
                            <label
                                class="form-label">Search the exact phrase</label>
                            <input class="form-control" type="text" size="40" name="PhraseSearchText"
                                value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'phrase_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['phrase_search_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
                        </div>

                        <div class="block">

                            <div class="form-group">

                                <label
                                    class="form-label">Published</label>
                                <select name="SearchDate" class="form-control">
                                    <option value="-1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '-1' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Any time</option>
                                    <option value="1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '1' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Last day</option>
                                    <option value="2" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '2' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Last week</option>
                                    <option value="3" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '3' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Last month</option>
                                    <option value="4" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '4' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Last three months</option>
                                    <option value="5" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '5' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                        Last year</option>
                                </select>
                            </div>

                            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_template_search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_template_search'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                <div class="form-group">
                                    <label
                                        class="form-label">Display per page</label>
                                    <select name="SearchPageLimit" class="form-control">
                                        <option value="1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                            5 items</option>
                                        <option value="2"
                                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = in_array( $if_cond3, array( 1,
       2,
       3,
       4,
       5 ) );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 2 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"
                                            ';
}
unset( $if_cond );
// if ends

$text .= '>10 items</option>
                                        <option value="3" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 3 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                            20 items</option>
                                        <option value="4" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 4 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                            30 items</option>
                                        <option value="5" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 5 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                            50 items</option>
                                    </select>
                                </div>
                            ';
}
unset( $if_cond );
// if ends

$text .= '
                            ';
// foreach begins
$skipDelimiter = true;
$fe_array_1a3714a95538767476f89cdba393ad66_1 = [];
$fe_array_keys_1a3714a95538767476f89cdba393ad66_1 = [];
$fe_n_items_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1  = 0;
$fe_i_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_key_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_val_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_offset_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_max_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_reverse_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_first_val_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_last_val_1a3714a95538767476f89cdba393ad66_1 = 0;
if ( !isset( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_1 ) ) $fe_variable_stack_1a3714a95538767476f89cdba393ad66_1 = [];
$fe_variable_stack_1a3714a95538767476f89cdba393ad66_1[] = @compact( 'fe_array_1a3714a95538767476f89cdba393ad66_1', 'fe_array_keys_1a3714a95538767476f89cdba393ad66_1', 'fe_n_items_1a3714a95538767476f89cdba393ad66_1', 'fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1', 'fe_i_1a3714a95538767476f89cdba393ad66_1', 'fe_key_1a3714a95538767476f89cdba393ad66_1', 'fe_val_1a3714a95538767476f89cdba393ad66_1', 'fe_offset_1a3714a95538767476f89cdba393ad66_1', 'fe_max_1a3714a95538767476f89cdba393ad66_1', 'fe_reverse_1a3714a95538767476f89cdba393ad66_1', 'fe_first_val_1a3714a95538767476f89cdba393ad66_1', 'fe_last_val_1a3714a95538767476f89cdba393ad66_1' );
unset( $fe_array_1a3714a95538767476f89cdba393ad66_1 );
unset( $fe_array_1a3714a95538767476f89cdba393ad66_1 );
$fe_array_1a3714a95538767476f89cdba393ad66_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $fe_array_1a3714a95538767476f89cdba393ad66_1 ) ) $fe_array_1a3714a95538767476f89cdba393ad66_1 = NULL;
while ( is_object( $fe_array_1a3714a95538767476f89cdba393ad66_1 ) and method_exists( $fe_array_1a3714a95538767476f89cdba393ad66_1, 'templateValue' ) )
    $fe_array_1a3714a95538767476f89cdba393ad66_1 = $fe_array_1a3714a95538767476f89cdba393ad66_1->templateValue();

$fe_array_keys_1a3714a95538767476f89cdba393ad66_1 = is_array( $fe_array_1a3714a95538767476f89cdba393ad66_1 ) ? array_keys( $fe_array_1a3714a95538767476f89cdba393ad66_1 ) : [];
$fe_n_items_1a3714a95538767476f89cdba393ad66_1 = count( $fe_array_keys_1a3714a95538767476f89cdba393ad66_1 );
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_offset_1a3714a95538767476f89cdba393ad66_1 = 0;
$fe_max_1a3714a95538767476f89cdba393ad66_1 = $fe_n_items_1a3714a95538767476f89cdba393ad66_1 - $fe_offset_1a3714a95538767476f89cdba393ad66_1;
$fe_reverse_1a3714a95538767476f89cdba393ad66_1 = false;
if ( $fe_offset_1a3714a95538767476f89cdba393ad66_1 < 0 || $fe_offset_1a3714a95538767476f89cdba393ad66_1 >= $fe_n_items_1a3714a95538767476f89cdba393ad66_1 )
{
    $fe_offset_1a3714a95538767476f89cdba393ad66_1 = ( $fe_offset_1a3714a95538767476f89cdba393ad66_1 < 0 ) ? 0 : $fe_n_items_1a3714a95538767476f89cdba393ad66_1;
    if ( $fe_n_items_1a3714a95538767476f89cdba393ad66_1 || $fe_offset_1a3714a95538767476f89cdba393ad66_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1a3714a95538767476f89cdba393ad66_1'. Array count: $fe_n_items_1a3714a95538767476f89cdba393ad66_1");   
}
}
if ( $fe_max_1a3714a95538767476f89cdba393ad66_1 < 0 || $fe_offset_1a3714a95538767476f89cdba393ad66_1 + $fe_max_1a3714a95538767476f89cdba393ad66_1 > $fe_n_items_1a3714a95538767476f89cdba393ad66_1 )
{
    if ( $fe_max_1a3714a95538767476f89cdba393ad66_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1a3714a95538767476f89cdba393ad66_1");
    $fe_max_1a3714a95538767476f89cdba393ad66_1 = $fe_n_items_1a3714a95538767476f89cdba393ad66_1 - $fe_offset_1a3714a95538767476f89cdba393ad66_1;
}
if ( $fe_reverse_1a3714a95538767476f89cdba393ad66_1 )
{
    $fe_first_val_1a3714a95538767476f89cdba393ad66_1 = $fe_n_items_1a3714a95538767476f89cdba393ad66_1 - 1 - $fe_offset_1a3714a95538767476f89cdba393ad66_1;
    $fe_last_val_1a3714a95538767476f89cdba393ad66_1  = 0;
}
else
{
    $fe_first_val_1a3714a95538767476f89cdba393ad66_1 = $fe_offset_1a3714a95538767476f89cdba393ad66_1;
    $fe_last_val_1a3714a95538767476f89cdba393ad66_1  = $fe_n_items_1a3714a95538767476f89cdba393ad66_1 - 1;
}
// foreach
for ( $fe_i_1a3714a95538767476f89cdba393ad66_1 = $fe_first_val_1a3714a95538767476f89cdba393ad66_1; $fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1 < $fe_max_1a3714a95538767476f89cdba393ad66_1 && ( $fe_reverse_1a3714a95538767476f89cdba393ad66_1 ? $fe_i_1a3714a95538767476f89cdba393ad66_1 >= $fe_last_val_1a3714a95538767476f89cdba393ad66_1 : $fe_i_1a3714a95538767476f89cdba393ad66_1 <= $fe_last_val_1a3714a95538767476f89cdba393ad66_1 ); $fe_reverse_1a3714a95538767476f89cdba393ad66_1 ? $fe_i_1a3714a95538767476f89cdba393ad66_1-- : $fe_i_1a3714a95538767476f89cdba393ad66_1++ )
{
$fe_key_1a3714a95538767476f89cdba393ad66_1 = $fe_array_keys_1a3714a95538767476f89cdba393ad66_1[$fe_i_1a3714a95538767476f89cdba393ad66_1];
$fe_val_1a3714a95538767476f89cdba393ad66_1 = $fe_array_1a3714a95538767476f89cdba393ad66_1[$fe_key_1a3714a95538767476f89cdba393ad66_1];
$vars[$rootNamespace]['sub_tree'] = $fe_val_1a3714a95538767476f89cdba393ad66_1;
$text .= '                                <input type="hidden" name="SubTreeArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_tree'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                            ';
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_1 ) ) extract( array_pop( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_1 ) );

else
{

unset( $fe_array_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_array_keys_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_n_items_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_n_items_processed_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_i_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_key_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_val_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_offset_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_max_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_reverse_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_first_val_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_last_val_1a3714a95538767476f89cdba393ad66_1 );

unset( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_1 );

}

// foreach ends
$text .= '
                        </div>

                        <div class="buttonblock">
                            <input class="btn" type="submit" name="SearchButton"
                                value="Search" />
                        </div>

                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( false )
    $if_cond = false;
else
    $if_cond = false;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <br />
                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Sw";
else
    $namespace .= ':Sw';
$vars[$namespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Sw';

switch ( $match )
{
    case 0:
    {
$text .= '                            <div class="form-help">
                                ';
unset( $var );
$var = 'No results were found when searching for "%1"';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/ezwebin/content/advancedsearch',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'search_text',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            </div>
                            ';
    } break;
    default:
    {
$text .= '                            <div class="form-help">
                                ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = htmlspecialchars( (string) $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( $var3, $var4 );unset( $var3, $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Search for "%1" returned %2 matches', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            </div>
                            ';
    } break;
}
unset( $match );

$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Sw";
else
    $namespace .= ':Sw';
unset( $vars[$namespace]['match'] );
$text .= '
                            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_result'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                ';
// foreach begins
$skipDelimiter = true;
$fe_array_1a3714a95538767476f89cdba393ad66_2 = [];
$fe_array_keys_1a3714a95538767476f89cdba393ad66_2 = [];
$fe_n_items_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2  = 0;
$fe_i_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_key_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_val_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_offset_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_max_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_reverse_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_first_val_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_last_val_1a3714a95538767476f89cdba393ad66_2 = 0;
if ( !isset( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_2 ) ) $fe_variable_stack_1a3714a95538767476f89cdba393ad66_2 = [];
$fe_variable_stack_1a3714a95538767476f89cdba393ad66_2[] = @compact( 'fe_array_1a3714a95538767476f89cdba393ad66_2', 'fe_array_keys_1a3714a95538767476f89cdba393ad66_2', 'fe_n_items_1a3714a95538767476f89cdba393ad66_2', 'fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2', 'fe_i_1a3714a95538767476f89cdba393ad66_2', 'fe_key_1a3714a95538767476f89cdba393ad66_2', 'fe_val_1a3714a95538767476f89cdba393ad66_2', 'fe_offset_1a3714a95538767476f89cdba393ad66_2', 'fe_max_1a3714a95538767476f89cdba393ad66_2', 'fe_reverse_1a3714a95538767476f89cdba393ad66_2', 'fe_first_val_1a3714a95538767476f89cdba393ad66_2', 'fe_last_val_1a3714a95538767476f89cdba393ad66_2' );
unset( $fe_array_1a3714a95538767476f89cdba393ad66_2 );
unset( $fe_array_1a3714a95538767476f89cdba393ad66_2 );
$fe_array_1a3714a95538767476f89cdba393ad66_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_result'] : null;
if (! isset( $fe_array_1a3714a95538767476f89cdba393ad66_2 ) ) $fe_array_1a3714a95538767476f89cdba393ad66_2 = NULL;
while ( is_object( $fe_array_1a3714a95538767476f89cdba393ad66_2 ) and method_exists( $fe_array_1a3714a95538767476f89cdba393ad66_2, 'templateValue' ) )
    $fe_array_1a3714a95538767476f89cdba393ad66_2 = $fe_array_1a3714a95538767476f89cdba393ad66_2->templateValue();

$fe_array_keys_1a3714a95538767476f89cdba393ad66_2 = is_array( $fe_array_1a3714a95538767476f89cdba393ad66_2 ) ? array_keys( $fe_array_1a3714a95538767476f89cdba393ad66_2 ) : [];
$fe_n_items_1a3714a95538767476f89cdba393ad66_2 = count( $fe_array_keys_1a3714a95538767476f89cdba393ad66_2 );
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_offset_1a3714a95538767476f89cdba393ad66_2 = 0;
$fe_max_1a3714a95538767476f89cdba393ad66_2 = $fe_n_items_1a3714a95538767476f89cdba393ad66_2 - $fe_offset_1a3714a95538767476f89cdba393ad66_2;
$fe_reverse_1a3714a95538767476f89cdba393ad66_2 = false;
if ( $fe_offset_1a3714a95538767476f89cdba393ad66_2 < 0 || $fe_offset_1a3714a95538767476f89cdba393ad66_2 >= $fe_n_items_1a3714a95538767476f89cdba393ad66_2 )
{
    $fe_offset_1a3714a95538767476f89cdba393ad66_2 = ( $fe_offset_1a3714a95538767476f89cdba393ad66_2 < 0 ) ? 0 : $fe_n_items_1a3714a95538767476f89cdba393ad66_2;
    if ( $fe_n_items_1a3714a95538767476f89cdba393ad66_2 || $fe_offset_1a3714a95538767476f89cdba393ad66_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1a3714a95538767476f89cdba393ad66_2'. Array count: $fe_n_items_1a3714a95538767476f89cdba393ad66_2");   
}
}
if ( $fe_max_1a3714a95538767476f89cdba393ad66_2 < 0 || $fe_offset_1a3714a95538767476f89cdba393ad66_2 + $fe_max_1a3714a95538767476f89cdba393ad66_2 > $fe_n_items_1a3714a95538767476f89cdba393ad66_2 )
{
    if ( $fe_max_1a3714a95538767476f89cdba393ad66_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1a3714a95538767476f89cdba393ad66_2");
    $fe_max_1a3714a95538767476f89cdba393ad66_2 = $fe_n_items_1a3714a95538767476f89cdba393ad66_2 - $fe_offset_1a3714a95538767476f89cdba393ad66_2;
}
if ( $fe_reverse_1a3714a95538767476f89cdba393ad66_2 )
{
    $fe_first_val_1a3714a95538767476f89cdba393ad66_2 = $fe_n_items_1a3714a95538767476f89cdba393ad66_2 - 1 - $fe_offset_1a3714a95538767476f89cdba393ad66_2;
    $fe_last_val_1a3714a95538767476f89cdba393ad66_2  = 0;
}
else
{
    $fe_first_val_1a3714a95538767476f89cdba393ad66_2 = $fe_offset_1a3714a95538767476f89cdba393ad66_2;
    $fe_last_val_1a3714a95538767476f89cdba393ad66_2  = $fe_n_items_1a3714a95538767476f89cdba393ad66_2 - 1;
}
// foreach
for ( $fe_i_1a3714a95538767476f89cdba393ad66_2 = $fe_first_val_1a3714a95538767476f89cdba393ad66_2; $fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2 < $fe_max_1a3714a95538767476f89cdba393ad66_2 && ( $fe_reverse_1a3714a95538767476f89cdba393ad66_2 ? $fe_i_1a3714a95538767476f89cdba393ad66_2 >= $fe_last_val_1a3714a95538767476f89cdba393ad66_2 : $fe_i_1a3714a95538767476f89cdba393ad66_2 <= $fe_last_val_1a3714a95538767476f89cdba393ad66_2 ); $fe_reverse_1a3714a95538767476f89cdba393ad66_2 ? $fe_i_1a3714a95538767476f89cdba393ad66_2-- : $fe_i_1a3714a95538767476f89cdba393ad66_2++ )
{
$fe_key_1a3714a95538767476f89cdba393ad66_2 = $fe_array_keys_1a3714a95538767476f89cdba393ad66_2[$fe_i_1a3714a95538767476f89cdba393ad66_2];
$fe_val_1a3714a95538767476f89cdba393ad66_2 = $fe_array_1a3714a95538767476f89cdba393ad66_2[$fe_key_1a3714a95538767476f89cdba393ad66_2];
$vars[$rootNamespace]['element'] = $fe_val_1a3714a95538767476f89cdba393ad66_2;
$text .= '                                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "bug_report_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "bug_report_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) && filemtime( 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' ) > filemtime( 'design/delta/override/templates/line/bug_report_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/bug_report_form.tpl' );
include( '' . 'var/site/cache/template/compiled/bug_report_form-a09e5fb7cf2f36cc25d27360fa3adc5a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/bug_report_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "category", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "category" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) && filemtime( 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' ) > filemtime( 'design/delta/override/templates/line/category.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/category.tpl' );
include( '' . 'var/site/cache/template/compiled/category-29f2a5284ec5ea723b435a7ed2e9b47c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "user", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "user" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) && filemtime( 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' ) > filemtime( 'design/delta/override/templates/line/user.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/user.tpl' );
include( '' . 'var/site/cache/template/compiled/user-53a3920918b523fb7df540df9fc2ba4e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "story", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "story" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) && filemtime( 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' ) > filemtime( 'design/delta/override/templates/line/story.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/story.tpl' );
include( '' . 'var/site/cache/template/compiled/story-28ce5526878ccf1911475287b39ea36b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/story.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "youtube_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "youtube_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) && filemtime( 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl' );
include( '' . 'var/site/cache/template/compiled/youtube_video-215631ac83cd1cae6696ade340cc39ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/youtube_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "instagram_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "instagram_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) && filemtime( 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl' );
include( '' . 'var/site/cache/template/compiled/instagram_video-a2b8aea67863600543403d462f7b2430.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/instagram_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) && filemtime( 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' ) > filemtime( 'design/delta/override/templates/line/article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/article.tpl' );
include( '' . 'var/site/cache/template/compiled/article-0dc51252b443bc8ca920babc4dfc063f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) && filemtime( 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' );
include( '' . 'var/site/cache/template/compiled/geo_article-c6158a194520ae223b667589c0ca63ac.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) && filemtime( 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_mainpage-8eb592bf1ba994f1b60fa4aef510f2eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) && filemtime( 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' );
include( '' . 'var/site/cache/template/compiled/article_subpage-81769407d6e1d2cd2d0c50e85a9c7fdb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) && filemtime( 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' );
include( '' . 'var/site/cache/template/compiled/banner-b7050ba8e44bbded98450cf004ca7f79.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) && filemtime( 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' );
include( '' . 'var/site/cache/template/compiled/blog-0eefb6a517b1d59971fdf42eb6cf7c0f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) && filemtime( 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl' );
include( '' . 'var/site/cache/template/compiled/blog_post-6ef378421b57de5c47a9352349bd01e3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) && filemtime( 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' ) > filemtime( 'design/delta/override/templates/line/comment.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/comment.tpl' );
include( '' . 'var/site/cache/template/compiled/comment-4bf35f09f1c4e9ac6cb6843197f07234.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) && filemtime( 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' );
include( '' . 'var/site/cache/template/compiled/documentation_page-2a3f2d2c0e4683ed9f5d9320e772c5da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) && filemtime( 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' );
include( '' . 'var/site/cache/template/compiled/event_calendar-2525ac7b8a5a786030447e88a7dfb04d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) && filemtime( 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' );
include( '' . 'var/site/cache/template/compiled/event-c60ef1079d868f89e7b1b63a58ba31be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) && filemtime( 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' ) > filemtime( 'design/delta/override/templates/line/feedback_form.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/feedback_form.tpl' );
include( '' . 'var/site/cache/template/compiled/feedback_form-271ca800559b2f6858133a01c4ccfe93.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) && filemtime( 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' );
include( '' . 'var/site/cache/template/compiled/file-3758e42026f15418124382bf9cb09bbf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) && filemtime( 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' );
include( '' . 'var/site/cache/template/compiled/flash-c345c6e42d44095796bfe1db2e0a5b58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) && filemtime( 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' ) > filemtime( 'design/delta/override/templates/line/folder.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/folder.tpl' );
include( '' . 'var/site/cache/template/compiled/folder-75e1beaa9daa5edcba545fc389bf2128.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) && filemtime( 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' );
include( '' . 'var/site/cache/template/compiled/forum-2fa55dab5a456a6aba7031471f0e2e3e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) && filemtime( 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_reply-4924123f5e578783f4ab098d0dffee9c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) && filemtime( 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' );
include( '' . 'var/site/cache/template/compiled/forum_topic-843ed6aa42d524a1fa22fccd99bb8088.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) && filemtime( 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' );
include( '' . 'var/site/cache/template/compiled/forums-fdfdc5d11636c6b72c09ca0e634699e1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) && filemtime( 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl' );
include( '' . 'var/site/cache/template/compiled/gallery-b46366278a5d1acc889689a5178e76c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) && filemtime( 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' ) > filemtime( 'design/delta/override/templates/line/image.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/image.tpl' );
include( '' . 'var/site/cache/template/compiled/image-846d0aa3eb266feceb498985696efdc1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) && filemtime( 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' );
include( '' . 'var/site/cache/template/compiled/infobox-1b393dc085eabb194b5cc4b6a846e4aa.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) && filemtime( 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' ) > filemtime( 'design/delta/override/templates/line/link.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/override/templates/line/link.tpl' );
include( '' . 'var/site/cache/template/compiled/link-2ac4d77fb122ded7fc5704360a33f762.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) && filemtime( 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' );
include( '' . 'var/site/cache/template/compiled/multicalendar-1a11a1a66ff5e4705f8de4f3098ad82f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) && filemtime( 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' );
include( '' . 'var/site/cache/template/compiled/poll-d60f5c1c7e2f5519285fe8b2907403da.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) && filemtime( 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' ) > filemtime( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl' );
include( '' . 'var/site/cache/template/compiled/product-d09e8a7524a9c500849e47ee1ff4ab25.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/sevenx_diggclone/design/digg/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) && filemtime( 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' );
include( '' . 'var/site/cache/template/compiled/silverlight-3f7a054de3d8d91d837d1e7c14fc319d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) && filemtime( 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' );
include( '' . 'var/site/cache/template/compiled/quicktime-416ef5d211cdc513daba40e8da09154f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) && filemtime( 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' );
include( '' . 'var/site/cache/template/compiled/real_video-67a69ed473224fffbf81a9a73ae837a8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) && filemtime( 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' );
include( '' . 'var/site/cache/template/compiled/windows_media-959ce016ef74f23d3c1d5205b05b76eb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) && filemtime( 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' ) > filemtime( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' );
include( '' . 'var/site/cache/template/compiled/line-9f5ac76563da0e1aad1b67a83fdd1bb5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                                ';
$fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_2 ) ) extract( array_pop( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_2 ) );

else
{

unset( $fe_array_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_array_keys_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_n_items_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_n_items_processed_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_i_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_key_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_val_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_offset_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_max_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_reverse_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_first_val_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_last_val_1a3714a95538767476f89cdba393ad66_2 );

unset( $fe_variable_stack_1a3714a95538767476f89cdba393ad66_2 );

}

// foreach ends
$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '
                        ';
}
unset( $if_cond );
// if ends

$text .= '
                        ';
$oldRestoreIncludeArray_91587b0d4b389bfa7e7604438844eb7d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = '/content/advancedsearch';
if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri_suffix'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri_suffix', $vars[$namespace]['page_uri_suffix'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri_suffix'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri_suffix', 'unset' );

unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = urlencode( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'phrase_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['phrase_search_text'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = urlencode( $var5 );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_attribute_id'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
unset( $var11 );
unset( $var12 );
unset( $var13 );
unset( $var13 );
$var13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var13 ) ) $var13 = NULL;
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
$var12 = ( ( $var13 ) > ( 0 ) );
unset( $var13 );
if (! isset( $var12 ) ) $var12 = NULL;
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
unset( $var14 );
unset( $var16 );
unset( $var16 );
$var16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var16 ) ) $var16 = NULL;
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
$var14 = ( '&SearchTimestamp=' . $var16 );
unset( $var16 );
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
$var11 = $var12 ? $var14 : '';
unset( $var12, $var14 );
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
unset( $var12 );
unset( $var13 );
unset( $var14 );
unset( $var14 );
$var14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
$var13 = ( ( $var14 ) > ( 0 ) );
unset( $var14 );
if (! isset( $var13 ) ) $var13 = NULL;
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
unset( $var15 );
unset( $var17 );
$var17 = urlencode( 'SubTreeArray[]' );
if (! isset( $var17 ) ) $var17 = NULL;
while ( is_object( $var17 ) and method_exists( $var17, 'templateValue' ) )
    $var17 = $var17->templateValue();
unset( $var19 );
unset( $var20 );
unset( $var22 );
$var22 = urlencode( 'SubTreeArray[]' );
if (! isset( $var22 ) ) $var22 = NULL;
while ( is_object( $var22 ) and method_exists( $var22, 'templateValue' ) )
    $var22 = $var22->templateValue();
$var20 = ( '&' . $var22 . '=' );
unset( $var22 );
if (! isset( $var20 ) ) $var20 = NULL;
while ( is_object( $var20 ) and method_exists( $var20, 'templateValue' ) )
    $var20 = $var20->templateValue();
unset( $var21 );
unset( $var21 );
$var21 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var21 ) ) $var21 = NULL;
while ( is_object( $var21 ) and method_exists( $var21, 'templateValue' ) )
    $var21 = $var21->templateValue();
while ( is_object( $var21 ) and method_exists( $var21, 'templateValue' ) )
    $var21 = $var21->templateValue();
$var19 = implode( $var20, $var21 );unset( $var20, $var21 );
if (! isset( $var19 ) ) $var19 = NULL;
while ( is_object( $var19 ) and method_exists( $var19, 'templateValue' ) )
    $var19 = $var19->templateValue();
$var15 = ( '&' . $var17 . '=' . $var19 );
unset( $var17, $var19 );
if (! isset( $var15 ) ) $var15 = NULL;
while ( is_object( $var15 ) and method_exists( $var15, 'templateValue' ) )
    $var15 = $var15->templateValue();
$var12 = $var13 ? $var15 : '';
unset( $var13, $var15 );
if (! isset( $var12 ) ) $var12 = NULL;
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
unset( $var14 );
unset( $var14 );
$var14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
unset( $var16 );
unset( $var16 );
$var16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $var16 ) ) $var16 = NULL;
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
$var = ( '?SearchText=' . $var2 . '&PhraseSearchText=' . $var4 . '&SearchContentClassID=' . $var6 . '&SearchContentClassAttributeID=' . $var8 . '&SearchSectionID=' . $var10 . $var11 . $var12 . '&SearchDate=' . $var14 . '&SearchPageLimit=' . $var16 );
unset( $var2, $var4, $var6, $var8, $var10, $var11, $var12, $var14, $var16 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri_suffix'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' ) && filemtime( 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' ) > filemtime( 'design/delta/templates/navigator/google.tpl' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/delta/templates/navigator/google.tpl' );
include( '' . 'var/site/cache/template/compiled/google-e86a947a831075deac06f3c72e01f3a7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/delta/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_91587b0d4b389bfa7e7604438844eb7d;

$text .= '                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="border-bl">
        <div class="border-br">
            <div class="border-bc"></div>
        </div>
    </div>
</div>';

$setArray = $oldSetArray_fd5c326e5b5f3fcf449f4ee0389411a2;
$tpl->Level--;
?>
