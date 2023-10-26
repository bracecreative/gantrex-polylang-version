<form class="w-[80%] <?php esc_attr_e(\Brace\DocumentDirectoryController::getInstance()->classes['search_form']); ?> mx-auto mb-4" method="get" action="<?php echo esc_url(get_post_type_archive_link('document')); ?>">
    <div class="global-search search-bar py-10 relative">
        <label for=""><input id="news-search" class="cursor-pointer w-full border-2 border=black h-[61px] px-6 bg-white text-primary uppercase gothic-medium tracking-widest focus:outline-none mb-4 pl-[70px]" id="document-directory-search" type="text" name="s" value="<?php the_search_query(); ?>" type="text" placeholder="SEARCH DOCUMENTS..."></input></label>
        <button type="button" style="<?php echo !get_search_query() ? 'display: none' : ''; ?>" class="<?php esc_attr_e(\Brace\DocumentDirectoryController::getInstance()->classes['clear_search']); ?> border border-secondary text-secondary px-2 py-1  flex items-center absolute right-3 top-1/2 transform -translate-y-1/2 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <span>
                Clear search
            </span>
        </button>
    </div>
</form>