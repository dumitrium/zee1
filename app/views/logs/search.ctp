<h2>Istoric</h2>
<?php  
    echo $form->create("Log",array('action' => 'logs')); 
    echo $form->input("q", array('label' => 'Search for')); 
    echo $form->end("Log"); 
?> 

<table> 
    <tr> 
        <th>Id</th> 
        <th>Title</th> 
                <th>Action</th> 
        <th>Created</th> 
    </tr> 

<!-- Here's where we loop through our $results array, printing out post info --> 

<?php foreach ($results as $post): ?> 
    <tr> 
        <td><?php echo $post['Log']['id']; ?></td> 
        <td><?php echo $post['Log']['created']; ?></td> 
    </tr> 
<?php endforeach; ?> 
</table> 
