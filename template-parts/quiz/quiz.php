<?php
/**
 * Template part for displaying a single quiz
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @since 2.0.0
 */

# get and save quiz content
the_row();
$question = get_sub_field('question');

$questionType = $question['type'];
$questionDescription = $question['description'];

?>

<form class="quiz mb-4" action="#">

    <?php

    # show question
    echo $questionDescription;

    # display answer type choice
    if (have_rows('answer') && strcmp($questionType, 'choice') == 0) {
        while (have_rows('answer')) {
            get_template_part('template-parts/quiz/answer/answer', 'choice');
        }
    }

    # display answer type dropdown
    elseif (have_rows('answer') && strcmp($questionType, 'dropdown') == 0) {
        get_template_part('template-parts/quiz/answer/answer', 'dropdown');
    }
    
    # display answer type input
    elseif (have_rows('answer') && strcmp($questionType, 'input') == 0) {
        get_template_part('template-parts/quiz/answer/answer', 'input');
    }
    
    ?>

    <button type="submit" class="btn btn-primary">
        <?php _e('Überprüfen', 'prolog') ?>
    </button>

    <div class="return flash mt-2" hidden></div>
   
</form>