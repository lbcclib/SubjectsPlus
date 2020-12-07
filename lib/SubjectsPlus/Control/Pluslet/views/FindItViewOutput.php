<?php
# Design by Forrest Johnson, December 2020
?>
<p class="findit-description">Search many LBCC Library databases simultaneuosly</p>

<form id="search-box" class="form-search pure-g" method="get" action="https://libfind.linnbenton.edu:4430/search" onsubmit="route_search(event)">
   <fieldset class="search-bar-grouping pure-u-1 pure-u-lg-7-8 pure-u-xl-3-4" <?php echo (strpos($_SERVER['REQUEST_URI'], 'control')) ? 'disabled="disabled"' : '' ?>>
		<select id="search-source" class="input-lg findit-search" aria-label="Databases to search">
		   <option>Everything</option>
		   <option>Articles</option>
		   <option>Books</option>
		   <option>Ebooks</option>
      </select>

      <input name="q" type="text" class="findit-search" aria-label="Search query">

		<input name="show_articles" type="hidden" value="true" />
		<input name="detail_record_view" type="hidden" value="1" />
		<input name="locg" type="hidden" value="8"/>
		<button type="submit" class="findit-search"><span class="fa fa-search" aria-label="Search"></span></button>
	</fieldset>
</form>
<script>
function route_search(event) {
   event.preventDefault(); 
   var search_form = document.getElementById("search-box");

   var search_source = document.getElementById('search-source').selectedIndex;

   var query_field = document.createElement("input");
   query_field.setAttribute("type", "hidden");
   query_field.setAttribute("value", search_form.elements["q"].value);
   if ("0" == search_source) {
      search_form.action = "https://libfind.linnbenton.edu:4430/search";
	   search_form.elements["show_articles"].value = "true";
   } else if ("1" == search_source) {
	   search_form.elements["show_articles"].value = "only";
      search_form.action = "https://libfind.linnbenton.edu:4430/articles";
   } else if ("2" == search_source) {
      search_form.action = "https://libcat.linnbenton.edu/eg/opac/results";
	   query_field.setAttribute("name", "query");
   }  else {
      search_form.action = "https://ebookcentral.proquest.com/lib/linnbenton-ebooks/search.action";
	   query_field.setAttribute("name", "query");
      query_field.setAttribute("type", "hidden");
   }
   search_form.appendChild(query_field);
   search_form.submit();

   return false;}</script>
