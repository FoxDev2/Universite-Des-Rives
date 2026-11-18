document.querySelectorAll("label.label").forEach((label) => {
  const textNode = [...label.childNodes]
    .reverse()
    .find((node) => node.nodeType === Node.TEXT_NODE && node.textContent.trim());

  if (!textNode || !/\*\s*$/.test(textNode.textContent)) {
    return;
  }

  textNode.textContent = textNode.textContent.replace(/\*\s*$/, "");
  const marker = document.createElement("span");
  marker.className = "text-red-600";
  marker.textContent = "*";
  marker.setAttribute("aria-hidden", "true");
  textNode.after(marker);
});