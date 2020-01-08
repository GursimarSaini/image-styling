from flask import Flask, render_template, redirect
import ml
import rmv
app = Flask(__name__)

@app.route("/")
def home():
    ml.cmd_st()
@app.route("/redirect")
def redirect():
    rmv.file_rmv()
    return redirect('http://localhost/site/')
if __name__ == "__main__":
    app.run(debug=True)
