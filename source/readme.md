This is the procedure to create the street indices:

Copy and paste the descriptions of the areas from Ancestry into
a text file in the work directory (example: toronto-east.1).


Run first program to rearrange lines:
   php ../source/1921-1.php \<toronto-east.1 \>toronto-east.2
   
Edit toronto-east.2 by hand to fix up lines (mostly split lines
where more than one street is shown, and tidy a few others, this
is quicker to do by hand than a program).  Save results in
toronto-east.3.

Run program to attach subdistrict to each street segment:
    php ../source/1921-2.php \<toronto-east.3 \>toronto-east.4
    
Now sort the results by street:
    sort \<toronto-east.4 \>toronto-east.5
    
Results are copied into /index and renamed .txt

1921-3.php was added to handle the Toronto City streets in York.

1921-all.php glues them together, then sorted to produce the 
combined list, and a descriptive header added.

York south/east/west were a slightly different format, used 1921-3.php

Parkdale didn't have any semicolons separating the streets, so about
500 of them had to be added by hand, then it ran the same as Toronto. 
    


