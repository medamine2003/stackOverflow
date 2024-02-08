<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/answer' => [[['_route' => 'app_answer_index', '_controller' => 'App\\Controller\\AnswerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/answer/new' => [[['_route' => 'app_answer_new', '_controller' => 'App\\Controller\\AnswerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/member' => [[['_route' => 'app_member_index', '_controller' => 'App\\Controller\\MemberController::index'], null, ['GET' => 0], null, true, false, null]],
        '/member/new' => [[['_route' => 'app_member_new', '_controller' => 'App\\Controller\\MemberController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/answer/([^/]++)(?'
                    .'|(*:61)'
                    .'|/edit(*:73)'
                    .'|(*:80)'
                .')'
                .'|/comment/([^/]++)(?'
                    .'|(*:108)'
                    .'|/edit(*:121)'
                    .'|(*:129)'
                .')'
                .'|/member/([^/]++)(?'
                    .'|(*:157)'
                    .'|/edit(*:170)'
                    .'|(*:178)'
                .')'
                .'|/question/(?'
                    .'|(\\d+)(*:205)'
                    .'|([^/]++)(?'
                        .'|(*:224)'
                        .'|/edit(*:237)'
                        .'|(*:245)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'app_answer_show', '_controller' => 'App\\Controller\\AnswerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_answer_edit', '_controller' => 'App\\Controller\\AnswerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'app_answer_delete', '_controller' => 'App\\Controller\\AnswerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        108 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        129 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        157 => [[['_route' => 'app_member_show', '_controller' => 'App\\Controller\\MemberController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_member_edit', '_controller' => 'App\\Controller\\MemberController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [[['_route' => 'app_member_delete', '_controller' => 'App\\Controller\\MemberController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_question_show_title', '_controller' => 'App\\Controller\\QuestionController::showTitle'], ['word'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [
            [['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
