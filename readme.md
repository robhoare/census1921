## Partial street index for 1921 Census Toronto

This is an attempt to create a partial street index for the
Canada 1921 census images on Ancestry, for Toronto only.

It relies on the subdivision descriptions on Ancestry listing
all the streets.  Around
half of the descriptions are currently missing.

So this index will only list around half the streets in the five 
Toronto electoral districts.

In addition, some Toronto City streets are within neighbouring
districts such as York, which have now been added.

The consolidated list of all the named streets in the Toronto ridings,
and Toronto City named streets in York ridings, is:
https://github.com/robhoare/census1921/blob/master/index/combined-toronto-city.txt

In that file, the subdistrict is show after the street name, followed
by the electoral district.

Unfortunately, the way the districts are described is different
for areas outside Toronto, so they cannot be added to this index.

The method used to produce this index is described in the /source
directory.

The results are shown in the /index subdirectory, by electoral
district.  Each file is sorted by street name, then shows the
subdistrict (and ward and polling district).  Example:
https://github.com/robhoare/census1921/blob/master/index/toronto-centre.txt
    
Just to repeat: this is a partial index.  Around half of all
streets will be missing.

License: Open Data Commons Open Database License (ODbL)

