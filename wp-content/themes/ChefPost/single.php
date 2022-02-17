<?php get_header();
global $url; ?>
<main class="main how-it-works" style="background: #FFFFFF;">
    <section class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php $link = get_field('link'); ?>
            <div style="margin-top: 45px;">
                <div style="margin-bottom: 20px;" class="text-center">
                    <h1 style="font-weight: 900; font-size: 56px" class="title"><?php the_title(); ?></h1>
                </div>
                <div class="post-content">
                    <?php the_content('Read More'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
    <section class="subscribe" style="background:#fbf9f6; margin-bottom: -25px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Client Code -->
                    <div id="fd-form-5fc7d7b8c792d45aa601ef32"></div>
                    <script>
                        window.fd('form', {
                            formId: '5fc7d7b8c792d45aa601ef32',
                            containerEl: '#fd-form-5fc7d7b8c792d45aa601ef32'
                        });
                    </script>
                    <!-- CLient Code -->
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    // let name = $(".title").html()
    // name = name.replace(/\s/g, '-');
    //
    // (async () => {
    //     const rawResponse = await fetch(base_url + `api/wordpress/services/${name}`, {
    //         method: 'GET'
    //     });
    //     const content = await rawResponse.json();
    //     if (content.success == true) {
    //         for (i = 0; i < content.data.length; i++) {
    //             $("#services").append(`
    //                 <div class="col-lg-3">
    //                 <div class="meal-block" style="position: relative;">
    //                     <div class="meal-image">
    //                         <a href="${base_url}chef/chef-${content.data[i]['user'].first_name}/${capitalizeFirstLetter(name.toLowerCase())}/${content.data[i]['slug']}" style="color: black">
    //                             <img class="img-fluid" style="border-radius: 3%" src="${base_url}${content.data[i]['image_url']}">
    //                         </a>
    //                     </div>
    //                     <div class="mt-2">
    //                         <h6>
    //                             <a href="http://localhost:8000/chef/chef-Gina/Cook-with-my-ingredients/homemade-breakfast" style="color: black">${content.data[i]['title']}</a>
    //                             <strong class="float-right">$${content.data[i]['price']}</strong>
    //                         </h6>
    //                         <p>${content.data[i]['description']}</p>
    //                     </div>
    //                 </div>
    //             </div>
    //             `)
    //         }
    //     }
    // })();
</script>

