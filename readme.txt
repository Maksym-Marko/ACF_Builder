ACF Page Builder.

Usage:
1) ACF installation
2) Settings
	- Add a new Field Group “Page Builder”
	- Add a new Field “Page Builder” (Field Name: page_builder, Field Type: Flexible Content)
		-- Add layout “Section First” (Name: section_first, Layout: Block)
		-- Add field: “Title” (Field Name: title_first, Field Type: text)
		-- Add field: “Image” (Field Name: image_first, Field Type: image, Return Format: Image URL)
	- Set Rules: Show this field group if “Post Template” is equal to “Page Builder”
	- Save changes
3) Place the Page Builder’s files to the active theme folder
4) Create a new page. Set Page Attributes -> Template -> Page Builder
5) Fill in the data
6) File template-page-builder.php contains the loop which helps to display the data on a particular page.

