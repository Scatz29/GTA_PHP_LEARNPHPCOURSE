<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 5 Review Questions</title>
</head>

<body>
<h1>Ch. 5 Review Questions - Using Strings</h1>
    <ul>
        <li><strong>How do you create a string</strong>
            <ul>
                <li>You create a string by enclosing a collection of characters within either double or single quotation marks.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What are the differences between using <em>single</em> and <em>double</em> quotation marks?</strong>
            <ul>
                <li>The differences between using single and double quotes are that with single quotes, you will always get a literal string printed out and with double quotes, you will be able to process php code/variables to get it's value in the place of the variable name.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the <em>concatenation</em> operator?  What is the <em>concatenation assignment</em> operator?</strong>
            <ul>
                <li>"." is the concatenation operator.  The concatenation assignment operator is ".=".</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the impact of having a newline in a string printed to the browser?  How do you convert a newline character to a break tag?</strong>
            <ul>
                <li>The impact of having a newline in a string printed to the browser is that the browser will render the strings all on the same line unless being told specifically to add a line break.</li>
                <li>You convert a newline character to a break tag using the nl2br() function.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What problems can occur when HTML is entered into form elements whose values will later be printed back to the Web browser?  What steps can be taken to sanctify submitted form data?</strong>
            <ul>
                <li>Page formatting and security problems can occur when HTML is entered into form elements whose values will later be printed back to the Web browser.</li>
                <li>Using htmlspecialchars(), htmlentities(), or strip_tags() functions are steps you can take to sanctify submitted form data.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What function makes data safe to pass in a URL?</strong>
            <ul>
                <li>The urlencode() function makes data safe to pass in a URL.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you escape problematic characters within a string?  What happens if you do not escape them?</strong>
            <ul>
                <li>You escape problematic characters within a string with a blackslash "\".</li>
                <li>If you do not escape problematic characters, the browser doesn't know when certain strings or parts of them begin or end and usually causes errors.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>The characters in a string are indexed beginning at what number?</strong>
            <ul>
                <li>The characters in a string are indexed starting at 0.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What does the <em>trim()</em> function do?</strong>
            <ul>
                <li>The trim function gets rid of any white or blank space before and after the string so that only the string is selected.</li>
            </ul>
        </li>
    </ul>




</body>

</html>