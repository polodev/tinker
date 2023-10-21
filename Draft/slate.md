# word 
- english
# word_set 
  * post_id
  * order
  * title
  * content
  * is_hidden_title
  * order
  * remarks
  * can_standalone
  * difficulty_level
  * category_id will 
  * type [synonym, antonym, two_column, 3-Column]

# word_set_columns
word_set_id
title (column_title)
type 
order

### pivot_word_word_set_column
  * word_id
  * word_set_column_id
  * order



```php
$post->wordSet->word
```


 $post = Post::with(['wordSet', 'wordSet.wordSetColumns', 'wordSet.wordSetColumns.words'])->find(1);                            
 
