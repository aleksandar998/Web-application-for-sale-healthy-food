function citati()
{
	quotes = new Array(2);
    authors = new Array(2);
    quotes[0] = "Don't focus on HOW MUCH YOU EAT. Focus on WHAT YOU EAT.";
    authors[0] = "FOOD MATTERS";
    quotes[1] = "Eat Healthy Live Healthy";
    authors[1] = "FOOD MATTERS";
    index = Math.floor(Math.random() * quotes.length);
    document.getElementById("citat").innerHTML = quotes[index]
    document.getElementById("author").innerHTML = authors[index]
}