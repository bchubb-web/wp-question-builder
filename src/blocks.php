<?php

namespace BchubbWeb\WpQuestionBuilder;

class Block {
    public function __construct()
    {
        \add_action('init', __CLASS__ . '::register_blocks', 15);
           
    }
    
    /**
     * iterates over blocks directory and registers all applicable blocks
     *
     * @return void
     */
    public function register_blocks(): void
    {

        foreach( new \GlobIterator( "blocks/*/block.json" ) as $block){
            \register_block_type($block->getPath(), []);
        }

    }
}
