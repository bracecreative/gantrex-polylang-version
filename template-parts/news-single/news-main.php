<?php while( have_rows('single_news') ): the_row();

$title = get_sub_field('title');
$singleCopy = get_sub_field('copy');
$image = get_sub_field('image')['url'];

?>

<div class="bg-light py-[100px] pb-[50px] m-auto max-w-[1360px]">

<?php if( get_row_index() % 2 == 0 ){ ?>

    <div class="right-norm-layout">
        <div class="w-auto m-auto">
            <div class="flex items-center justify-center news-single-row">
            <div class="single-news-image" style="background-size:cover;background-position: center center;background-repeat:no-repeat;display:block;width:45vw;height:350px;background-image: url('<?php echo $image; ?>')">
                </div>
                <div class="max-w-[42vw] ml-[50px]">
                    <h2 class="news-subheading pb-[20px] uppercase sen-bold text-[25px] text-primary tracking-[-2px] color "><?php echo $title; ?></h2>
                    <article class="news-article max-w-[44vw] gothic-book"><?php echo $singleCopy; ?></article>
                </div>
            </div>
        </div>
    </div>

<?php  } else { ?>

    <div class="left-norm-layout">
        <div class="w-auto m-auto">
            <div class="flex items-center justify-center news-single-row">
                <div class="max-w-[42vw] mr-[50px]">
                    <h2 class="news-subheading pb-[20px] uppercase sen-bold text-[25px] text-primary tracking-[-2px] color leading-[20px] "><?php echo $title; ?></h2>
                    <article class="news-article max-w-[44vw] gothic-book"><?php echo $singleCopy; ?></article>
                </div>
                <div class="single-news-image" style="background-size:cover;background-position: center center;background-repeat:no-repeat;display:block;width:45vw;height:350px;background-image: url('<?php echo $image; ?>')">
                </div>
            </div>
        </div>
    </div>

<?php }  endwhile; ?>

</div>

</div>
