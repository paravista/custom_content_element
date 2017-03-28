# Custom Content Elements

# Add new content element to "New Content Element Wizard"
mod.wizards.newContentElement.wizardItems.common {
	elements {
		text_image_left {
			icon = EXT:custom_content_element/Resources/Public/Svgs/content-text-image-left.svg
			#  you can also use one of the existent registered icons via iconIdentifier
			#iconIdentifier = content-image
			title = Text with image on left
			description = Text with image placed on left side in 30/70 size
			tt_content_defValues {
				CType = text_image_left
			}
		}
	}
	show := addToList(text_image_left)
}

# Define Preview Fluid Templates for Backend Preview
mod.web_layout.tt_content.preview {
	text_image_left = EXT:custom_content_element/Resources/Private/Templates/BackendPreview/TextImageLeft.html
}