import os
def cmd_st():
    str(os.system('cmd /c "python C:\\wamp64\\www\\site\\mlalgo\\neural_style.py --network C:\\wamp64\\www\\site\\mlalgo\\imagenet-vgg-verydeep-19.mat --content C:\\wamp64\\www\\site\\imgsty\\image\\image.jpg --styles C:\\wamp64\\www\\site\\imgsty\\style\\style.jpg --output C:\\wamp64\\www\\site\\imgsty\\output\\first.jpg --iterations 1 --overwrite"'))
