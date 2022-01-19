import cv2 
import pytesseract

img = cv2.imread('./US-1.jpg')

# Adding custom options if you need
custom_config = ""
text = pytesseract.image_to_string(img, config=custom_config)

print(text)