<?php global $info; ?>
<section id="servicos">
    <article>
        <div class="container">
            <?php
            $textos_query = new WP_Query([
                'post_type'      => 'textos_servicos',
                'posts_per_page' => 1,
            ]);

            if ($textos_query->have_posts()) :
                while ($textos_query->have_posts()) :
                    $textos_query->the_post();
                    $campos = get_fields();
            ?>
                    <div class="row">
                        <div class="col-12 text-center superior-texts">
                            <h2><?php the_title(); ?></h2>
                            <?php if (!empty($campos['texto_superior'])) : ?>
                                <p><?php echo esc_html($campos['texto_superior']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <div class="row row-servicos">
                <?php
                $servicos_query = new WP_Query([
                    'post_type'      => 'servicos',
                    'posts_per_page' => 4,
                ]);

                if ($servicos_query->have_posts()) :
                    while ($servicos_query->have_posts()) :
                        $servicos_query->the_post();
                        $card_text = get_field('texto_do_card');
                        $topic_list = get_field('topicos');
                ?>
                        <div class="col-sm-12 col-md-3 col-servicos">
                            <div class="servico">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="servico-thumb">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                    </div>
                                <?php endif; ?>

                                <h3 class="h5"><?php the_title(); ?></h3>

                                <div class="servico-content">
                                    <p>
                                        <?php echo esc_html($card_text); ?>
                                    </p>
                                    <ul>
                                        <?php
                                            if ($topic_list) :
                                                foreach ($topic_list as $item) :
                                                    $item_label = $item['label'];
                                        ?>
                                        <li>
                                            <?php echo esc_html($item_label); ?>
                                        </li>
                                        <?php
                                                endforeach;
                                            endif;
                                        ?>
                                    </ul>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="btn">
                                    Saiba mais
                                    <img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/blue-right-arrow.png">
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <?php
            if ($textos_query->have_posts()) :
                $textos_query = new WP_Query([
                    'post_type'      => 'textos_servicos',
                    'posts_per_page' => 1,
                ]);

                if ($textos_query->have_posts()) :
                    while ($textos_query->have_posts()) :
                        $textos_query->the_post();
                        $campos = get_fields();
            ?>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="inferior-texts">
                            <?php if (!empty($campos['titulo_inferior'])) : ?>
                                <h3><?php echo esc_html($campos['titulo_inferior']); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($campos['texto_inferior'])) : ?>
                                <p><?php echo esc_html($campos['texto_inferior']); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($campos['botao_inferior'])) : ?>
                                <?php

                                    $botao = $campos['botao_inferior'];

                                    // Se tiver link e texto no ACF
                                    if (!empty($botao['link']) && !empty($botao['texto'])) :
                                ?>
                                    <a href="<?php echo esc_url($botao['link']); ?>" class="btn primary-button" target="_blank" >
                                        <?php echo esc_html($botao['texto']); ?>
                                    </a>
                                <?php
                                    // Se não tiver link, mas tiver texto e $info['whatsapp']
                                    elseif (!empty($botao['texto']) && !empty($info['whatsapp'])) :
                                ?>
                                    <a href="tel:+55<?php echo $info['whatsapp']; ?>" class="btn primary-button" target="_blank" rel="noopener">
                                        <?php echo esc_html($botao['texto']); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            endif;
            ?>

        </div>
    </article>
</section>